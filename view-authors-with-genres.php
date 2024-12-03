<div class="container py-5">
  <div class="row mb-4">
    <div class="col">
      <h1 class="fw-bold text-center">Books by Authors</h1>
    </div>
    <div class="col-auto text-end">
      <?php include "view-authors-with-genres-newform.php"; ?>
    </div>
  </div>

  <div class="card-group flex-column w-100">
    <?php while ($author = $authors->fetch_assoc()) { ?>
      <!-- Author Card -->
      <div class="card w-100 mb-4 shadow-sm border-0">
        <div class="card-header bg-primary text-white">
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
              <div class="card mb-3 border-0">
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
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this book?');">
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
    border-radius: 8px;
    background-color: #fff;
  }

  /* Author Card Styling */
  .card-header {
    background-color: #007bff;
    color: white;
    padding: 1rem;
    border-bottom: 0;
    font-size: 1.25rem;
    font-weight: bold;
    text-align: center;
  }

  .card-body {
    padding: 1.5rem;
  }

  /* Book Card Styling */
  .scrollable-review {
    max-height: 100px;
    overflow-y: auto;
    background-color: #f8f9fa;
    border: 1px solid #e0e0e0;
  }

  /* Buttons */
  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .card-body {
      padding: 1rem;
    }
  }
</style>
