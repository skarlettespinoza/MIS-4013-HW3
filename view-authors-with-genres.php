<div class="container">
  <div class="row">
    <div class="col">
      <h1>Author's books with genres</h1>
    </div>
    <div class="col-auto">  
      <?php include "view-authors-with-genres-newform.php"; ?>
    </div>
  </div>

  <div class="card-group flex-column w-100"> <!-- Make this a full-width container -->
    <?php
      // Fetch authors
      while($author = $authors->fetch_assoc()) {
    ?>
      <!-- Author's Main Card (Full width) -->
      <div class="card w-100 mb-3"> <!-- Ensures the author card is full width -->
        <div class="card-body">
          <!-- Author Name -->
          <h5 class="card-title"><?php echo $author["author_name"]; ?></h5>

          <!-- Author Birthdate -->
          <p class="card-text"><small class="text-body-secondary">Author Birthdate: <?php echo $author["author_birthdate"]; ?></small></p>

          <!-- Fetch books for the current author -->
          <?php
            $genres = selectGenresByAuthor($author["author_id"]);
            while ($genre = $genres->fetch_assoc()) {
          ?>
            <!-- Individual Book Card (Full width) -->
            <div class="card w-100 mb-3"> <!-- Ensure the book card is full width -->
              <div class="card-body">
                <!-- Genre Section -->
                <p><strong>Genre:</strong> <?php echo $genre["genre"]; ?></p>

                <!-- Title Section -->
                <p><strong>Title:</strong> <?php echo $genre["title"]; ?></p>

                <!-- Book Series Section -->
                <p><strong>Book Series:</strong> <?php echo $genre["book_series"]; ?></p>

                <!-- Publication Date Section -->
                <p><strong>Publication Date:</strong> <?php echo $genre["publication_date"]; ?></p>

                <!-- Review Section -->
                <p><strong>Review:</strong></p>
                <div class="scrollable-review">
                  <p><?php echo $genre["review"]; ?></p>
                </div>

                <!-- Edit Form Section -->
                <p>
                  <?php include "view-authors-with-genres-editform.php"; ?>
                </p>

                <!-- Delete Button Section -->
                <p>
                  <form method="post" action="">
                    <input type="hidden" name="bid" value="<?php echo $genre["book_id"]; ?>">
                    <input type="hidden" name="actionType" value="Delete">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                      </svg>
                    </button>
                  </form>
                </p>
              </div>
            </div> <!-- End of Individual Book Card -->
          <?php
            }
          ?>

        </div>
      </div> <!-- End of Author's Main Card -->
    <?php
      }
    ?>
  </div>
</div>

<!-- Add this style section inside the <head> tag or at the bottom of your page -->
<style>
  /* Make sure both the author and book cards have consistent borders */
  .card {
    width: 100%;  /* Make sure the card takes the full width */
    margin-bottom: 1rem;  /* Adds spacing between cards */
    border: 1px solid #ddd;  /* Consistent border for all cards */
    border-radius: 5px;  /* Optional: gives a slight rounded corner for both */
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);  /* Optional: adds a slight shadow for better visibility */
  }

  .card-body {
    padding: 1rem;  /* Ensures padding inside the card body for proper spacing */
  }

  /* Optional: Remove card-group's horizontal spacing */
  .card-group {
    display: flex;
    flex-direction: column;
  }

  /* Ensure the review box has a consistent look across both cards */
  .scrollable-review {
    max-height: 150px;  /* Adjust the height according to your needs */
    overflow-y: auto;   /* Makes the content scrollable if it overflows */
    padding: 5px;       /* Adds padding inside the review box */
    border: 1px solid #ddd;  /* Ensures review box has a consistent border */
    border-radius: 5px;  /* Optional: gives a slight rounded corner */
  }
</style>
