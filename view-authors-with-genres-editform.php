<!-- Modal -->
<div class="modal fade" id="editBookModal<?php echo $genre['book_id']; ?>" tabindex="-1" aria-labelledby="editBookModalLabel<?php echo $genre['book_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editBookModalLabel<?php echo $genre['book_id']; ?>">Edit book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3 text-start">
            <label for="iid<?php echo $genre['book_id']; ?>" class="form-label">Author</label>
            <?php
            $authorsList = selectAuthorsForInput();
            $selectedAuthors=$genre['author_id'];
            include "view-authors-input-list.php"
            ?>
          </div>
          <div class="mb-3 text-start">
            <label for="gid<?php echo $genre['book_id']; ?>" class="form-label">Genre</label>
            <?php
            $genresList = selectGenresForInput();
            $selectedGenres=$genre['genre_id'];
            include "view-genres-input-list.php"
            ?>
          </div>
          <div class="mb-3 text-start">
            <label for="pid<?php echo $genre['book_id']; ?>" class="form-label">Publisher</label>
            <?php
            $publishersList = selectPublishersForInput();
            $selectedPublishers=$genre['publisher_id'];
            include "view-publishers-input-list.php"
            ?>
          </div>
          <div class="mb-3 text-start">
            <label for="title<?php echo $genre['book_id']; ?>" class="form-label">Title</label>
            <input type="text" class="form-control" id="title<?php echo $genre['book_id']; ?>" name="title" value="<?php echo $genre['title']; ?>">
          </div>    
          <div class="mb-3 text-start">
            <label for="book_series<?php echo $genre['book_id']; ?>" class="form-label">Book Series</label>
            <input type="text" class="form-control" id="book_series<?php echo $genre['book_id']; ?>" name="book_series" value="<?php echo $genre['book_series']; ?>">
          </div>    
          <div class="mb-3 text-start">
            <label for="publication_date<?php echo $genre['book_id']; ?>" class="form-label">Publication Date</label>
            <input type="date" class="form-control" id="publication_date<?php echo $genre['book_id']; ?>" name="publication_date" value="<?php echo $genre['publication_date'] ? $genre['publication_date'] : ''; ?>">
          </div>   
          <div class="mb-3 text-start">
            <label for="review<?php echo $genre['book_id']; ?>" class="form-label">Review</label>
            <input type="text" class="form-control" id="review<?php echo $genre['book_id']; ?>" name="review" value="<?php echo $genre['review']; ?>">
          </div>           
          <input type="hidden" name="bid" value="<?php echo $genre['book_id']; ?>">          
          <input type="hidden" name="actionType" value="Edit">
          <div class="text-start">
            <button type="submit" class="btn" style="background-color: #f72f97; border-color: #f72f97; color: white;">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
