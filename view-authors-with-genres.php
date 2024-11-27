<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Author's Books with Ratings</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <style>
    /* Star Rating */
    .star-rating {
      display: flex;
      direction: row-reverse;
      justify-content: flex-end;
      margin-bottom: 10px;
    }
    .star-rating input[type="radio"] {
      display: none;
    }
    .star-rating label {
      font-size: 24px;
      color: #ddd;
      cursor: pointer;
    }
    .star-rating input:checked ~ label {
      color: #ffc107;
    }
    .star-rating label:hover,
    .star-rating label:hover ~ label {
      color: #ffc107;
    }
    /* Optional: Styling for the review box */
    .scrollable-review {
      max-height: 150px;
      overflow-y: auto;
      padding: 5px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Author's Books with Genres</h1>
      </div>
    </div>

    <div class="card-group flex-column w-100">
      <?php
        // Include database connection and helper functions
        include "db.php";
        include "functions.php";

        // Fetch authors
        $authors = selectAuthors();
        while ($author = $authors->fetch_assoc()) {
      ?>
        <!-- Author's Main Card -->
        <div class="card w-100 mb-3">
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
              <!-- Book Card -->
              <div class="card w-100 mb-3">
                <div class="card-body">
                  <p><strong>Genre:</strong> <?php echo $genre["genre"]; ?></p>
                  <p><strong>Title:</strong> <?php echo $genre["title"]; ?></p>
                  <p><strong>Book Series:</strong> <?php echo $genre["book_series"]; ?></p>
                  <p><strong>Publication Date:</strong> <?php echo $genre["publication_date"]; ?></p>
                  <p><strong>Review:</strong></p>
                  <div class="scrollable-review">
                    <p><?php echo $genre["review"]; ?></p>
                  </div>

                  <!-- Star Rating Section -->
                  <form method="post" action="">
                    <p><strong>Your Rating:</strong></p>
                    <div class="star-rating">
                      <?php for ($i = 1; $i <= 5; $i++): ?>
                        <input 
                          type="radio" 
                          id="star-<?php echo $genre['book_id']; ?>-<?php echo $i; ?>" 
                          name="rating" 
                          value="<?php echo $i; ?>" 
                          <?php if (isset($genre['rating']) && $genre['rating'] == $i) echo "checked"; ?> 
                        />
                        <label for="star-<?php echo $genre['book_id']; ?>-<?php echo $i; ?>" class="star">&#9733;</label>
                      <?php endfor; ?>
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="book_id" value="<?php echo $genre["book_id"]; ?>" />
                    <button type="submit" name="actionType" value="Rate" class="btn btn-primary">Submit Rating</button>
                  </form>
                </div>
              </div> <!-- End of Book Card -->
            <?php
              }
            ?>
          </div>
        </div> <!-- End of Author Card -->
      <?php
        }
      ?>
    </div>
  </div>

  <?php
  // Handle rating submission
  if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["actionType"] === "Rate") {
      $book_id = intval($_POST["book_id"]);
      $rating = intval($_POST["rating"]);

      // Update the rating in the database
      $stmt = $conn->prepare("UPDATE books SET rating = ? WHERE book_id = ?");
      $stmt->bind_param("ii", $rating, $book_id);
      if ($stmt->execute()) {
          echo "<div class='alert alert-success'>Thank you for your rating!</div>";
      } else {
          echo "<div class='alert alert-danger'>Failed to submit your rating. Please try again.</div>";
      }
      $stmt->close();
  }
  ?>
</body>
</html>
