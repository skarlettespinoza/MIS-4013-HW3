<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#newBookModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newBookModal" tabindex="-1" aria-labelledby="newBookModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newBookModalLabel">New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="iid" class="form-label">Author</label>
            <?php
            $authorsList = selectAuthorsForInput();
            $selectedAuthors = 0;
            include "view-authors-input-list.php";
            ?>
          </div>
          <div class="mb-3">
            <label for="gid" class="form-label">Genre</label>
            <?php
            $genresList = selectGenresForInput();
            $selectedGenres = 0;
            include "view-genres-input-list.php";
            ?>
          </div>
          <div class="mb-3">
            <label for="pid" class="form-label">Publisher</label>
            <?php
            $publishersList = selectPublishersForInput();
            $selectedPublishers = 0;
            include "view-publishers-input-list.php";
            ?>         
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>    
          <div class="mb-3">
            <label for="book_series" class="form-label">Book Series</label>
            <input type="text" class="form-control" id="book_series" name="book_series">
          </div>    
          <div class="mb-3">
            <label for="publication_date" class="form-label">Publication Date</label>
            <input type="date" class="form-control" id="publication_date" name="publication_date">
          </div>  
          <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <input type="text" class="form-control" id="review" name="review">
          </div>           
          <input type="hidden" name="actionType" value="Add">
          <!-- Left-aligned Save Button -->
          <button type="submit" class="btn btn-custom-pink">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- CSS -->
<style>
  .btn-custom-pink {
    background-color: #f72f97; /* Custom pink shade */
    color: white;
    border: none;
  }

  .btn-custom-pink:hover {
    background-color: #ff85c1; /* Slightly lighter pink on hover */
    color: white;
  }

  .form-label {
    text-align: left; /* Ensure labels are left-aligned */
    display: block; /* Make labels occupy full width for proper alignment */
  }

  /* Ensure the button is left-aligned */
  .modal-body form {
    display: flex;
    flex-direction: column;
  }

  .modal-body form button {
    align-self: flex-start; /* Align the button to the left */
  }
</style>
