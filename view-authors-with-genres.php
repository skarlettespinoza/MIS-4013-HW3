<div class="container py-5">
  <div class="row mb-4">
    <div class="col">
      <h1 class="fw-bold text-center">My Books</h1>
    </div>
    <div class="col-auto text-end">
      <?php include "view-authors-with-genres-newform.php"; ?>
    </div>
  </div>

  <div class="card-group flex-column w-100">
    <?php while ($author = $authors->fetch_assoc()) { ?>
      <!-- Author Card -->
      <div class="card w-100 mb-4 shadow-sm border-0 rounded">
        <div class="card-header rounded-top">
          <h4 class="mb-0"><?php echo htmlspecialchars($author["author_name"]); ?></h4>
        </div>
        <div class="card-body">
          <p class="mb-3">
            <strong>Birthdate:</strong> <?php echo htmlspecialchars($author["author_birthdate"]); ?>
          </p>

          <!-- Books Section -->
          <?php
          $genres = selectGenresByAuthor($author["author_id"]);
          if ($genres->num_rows > 0) {
            while ($genre = $genres->fetch_assoc()) {
          ?>
              <!-- Book Card -->
              <div class="card mb-3 border-0 rounded">
                <div class="card-body border rounded">
                  <p><strong>Genre:</strong> <?php echo htmlspecialchars($genre["genre"]); ?></p>
                  <p><strong>Title:</strong> <?php echo htmlspecialchars($genre["title"]); ?></p>
                  <p><strong>Book Series:</strong> <?php echo htmlspecialchars($genre["book_series"]); ?></p>
                  <p><strong>Publication Date:</strong> <?php echo htmlspecialchars($genre["publication_date"]); ?></p>
                  <div class="scrollable-review bg-light p-2 rounded">
                    <p><strong>Review:</strong> <?php echo htmlspecialchars($genre["review"]); ?></p>
                  </div>

                  <!-- Action Buttons -->
                  <div class="mt-3">
                    <?php include "view-authors-with-genres-editform.php"; ?>
                    <form method="post" action="" class="d-inline-block">
                      <input type="hidden" name="bid" value="<?php echo htmlspecialchars($genre["book_id"]); ?>">
                      <input type="hidden" name="actionType" value="Delete">
                      <button type="submit" class="btn btn-sm btn-danger rounded" onclick="return confirm('Are you sure you want to delete this book?');">
                        <i class="bi bi-trash3"></i> Delete
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- End of Book Card -->
          <?php
            }
          } else {
            echo "<p class='text-muted'>No books found for this author.</p>";
          }
          ?>
        </div>
      </div>
      <!-- End of Author Card -->
    <?php } ?>
  </div>
</div>

<style>
  /* General Card Styling */
  .card {
    border-radius: 8px; /* Ensure all corners are rounded */
    background-color: #fff;
  }

  /* Author Card Styling */
  .card-header {
    background-color: #f72f97; /* Matches "View Genre" button */
    color: white;
    padding: 1rem;
    border-bottom: 0;
    font-size: 1.25rem;
    font-weight: bold;
    text-align: center;
    border-top-left-radius: 8px; /* Rounded top-left corner */
    border-top-right-radius: 8px; /* Rounded top-right corner */
  }

  .card-body {
    padding: 1.5rem;
    border-bottom-left-radius: 8px; /* Rounded bottom-left corner */
    border-bottom-right-radius: 8px; /* Rounded bottom-right corner */
  }

  /* Book Card Styling */
  .scrollable-review {
    max-height: 100px;
    overflow-y: auto;
    background-color: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 4px; /* Rounded corners for review section */
  }

  /* Delete Button Styling (Matches Below) */
  .btn-danger {
    background-color: #dc3545; /* Consistent delete button color */
    border-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
  }

  .btn-danger.rounded {
    border-radius: 4px; /* Ensure delete button corners are rounded */
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .card-body {
      padding: 1rem;
    }
  }
</style>
