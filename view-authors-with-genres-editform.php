<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBookModal<?php echo $genre['book_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

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
          <div class="mb-3">
            <label for="iid<?php echo $genre['book_id']; ?>" class="form-label">Author</label>
            <input type="number" class="form-control" id="iid<?php echo $genre['book_id']; ?>" name="iid" value="<?php echo $genre['author_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="gid<?php echo $genre['book_id']; ?>" class="form-label">Genre</label>
            <input type="number" class="form-control" id="gid<?php echo $genre['book_id']; ?>" name="gid" value="<?php echo $genre['genre_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="pid<?php echo $genre['book_id']; ?>" class="form-label">Publisher</label>
            <input type="number" class="form-control" id="pid<?php echo $genre['book_id']; ?>" name="pid" value="<?php echo $genre['publisher_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="title<?php echo $genre['book_id']; ?>" class="form-label">Title</label>
            <input type="text" class="form-control" id="title<?php echo $genre['book_id']; ?>" name="title" value="<?php echo $genre['title']; ?>">
          </div>    
          <div class="mb-3">
            <label for="book_series<?php echo $genre['book_id']; ?>" class="form-label">Book Series</label>
            <input type="text" class="form-control" id="book_series<?php echo $genre['book_id']; ?>" name="book_series" value="<?php echo $genre['book_series']; ?>">
          </div>    
          <div class="mb-3">
            <label for="publication_date<?php echo $genre['book_id']; ?>" class="form-label">Publication Date</label>
            <input type="text" class="form-control" id="publication_date<?php echo $genre['book_id']; ?>" name="publication_date" value="<?php echo $genre['publication_date']; ?>">
          </div>   
            <input type="hidden" name="bid" value="<?php echo $genre['book_id']; ?>">          
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>



