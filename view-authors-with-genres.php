<div class="container">
  <div class="row align-items-center">
    <div class="col">
      <h1 class="text-primary">Books</h1>
    </div>
    <div class="col-auto">
      <?php include "view-authors-with-genres-newform.php"; ?>
    </div>
  </div>

  <div class="card-group flex-column w-100">
    <?php
      // Fetch authors
      while ($author = $authors->fetch_assoc()) {
    ?>
      <!-- Author's Main Card -->
      <div class="card w-100 mb-4 border-0" style="background-color: #f8f9fa; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <h5 class="card-title text-primary"><?php echo $author["author_name"]; ?></h5>
          <p class="card-text"><small class="text-muted">Author Birthdate: <?php echo $author["author_birthdate"]; ?></small></p>

          <?php
            $genres = selectGenresByAuthor($author["author_id"]);
            while ($genre = $genres->fetch_assoc()) {
          ?>
            <!-- Book Card -->
            <div class="card w-100 mb-3 border-0" style="background-color: #ffffff; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
              <div class="card-body">
                <p><strong>Genre:</strong> <?php echo $genre["genre"]; ?></p>
                <p><strong>Title:</strong> <?php echo $genre["title"]; ?></p>
                <p><strong>Book Series:</strong> <?php echo $genre["book_series"]; ?></p>
                <p><strong>Publication Date:</strong> <?php echo $genre["publication_date"]; ?></p>
                <p><strong>Review:</strong></p>
                <div class="scrollable-review bg-light p-2 rounded">
                  <p><?php echo $genre["review"]; ?></p>
                </div>
                <p><?php include "view-authors-with-genres-editform.php"; ?></p>
                <p>
                  <form method="post" action="">
                    <input type="hidden" name="bid" value="<?php echo $genre["book_id"]; ?>">
                    <input type="hidden" name="actionType" value="Delete">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                      </svg>
                    </button>
                  </form>
                </p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<style>
  .card-group {
    display: flex;
    flex-direction: column;
  }
  .scrollable-review {
    max-height: 150px;
    overflow-y: auto;
    border: 1px solid #ddd;
  }
</style>
