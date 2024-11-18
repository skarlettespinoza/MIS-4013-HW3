<?php
// Fetch authors
while($author = $authors->fetch_assoc()) {
?>
  <!-- Author's Main Card -->
  <div class="card">
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
        <!-- Individual Book Card -->
        <div class="card mb-3">
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

            <!-- Star Rating Section -->
            <p><strong>Rating:</strong></p>
            <div class="stars" data-book-id="<?php echo $genre["book_id"]; ?>">
              <!-- Generate 5 star icons, all empty initially -->
              <i class="fa fa-star" data-index="1"></i>
              <i class="fa fa-star" data-index="2"></i>
              <i class="fa fa-star" data-index="3"></i>
              <i class="fa fa-star" data-index="4"></i>
              <i class="fa fa-star" data-index="5"></i>
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
/* Style the stars */
.stars i {
  font-size: 25px;  /* Adjust star size */
  color: lightgray;  /* Default empty star color */
  cursor: pointer;  /* Pointer on hover to show interactivity */
}

.stars i.filled {
  color: gold;  /* Filled star color */
}

.stars i:hover,
.stars i:hover ~ i {
  color: gold;  /* Hover effect to highlight stars */
}
document.querySelectorAll('.stars i').forEach(function(star) {
  star.addEventListener('click', function() {
    let rating = this.getAttribute('data-index');
    let parent = this.closest('.stars');
    let stars = parent.querySelectorAll('i');
    
    // Set the rating by adding the 'filled' class to the clicked star and all previous stars
    stars.forEach(function(star, index) {
      if (index < rating) {
        star.classList.add('filled');
      } else {
        star.classList.remove('filled');
      }
    });

    // Optionally, send the rating to the server here
    let bookId = parent.getAttribute('data-book-id');
    // Send the rating value via an AJAX request to save it in your database
    // For example: saveRating(bookId, rating);
  });
});
