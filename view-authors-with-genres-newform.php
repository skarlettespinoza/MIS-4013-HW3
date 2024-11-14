<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newReviewModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newReviewModal" tabindex="-1" aria-labelledby="newReviewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newReviewModalLabel">New Review</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <!-- Book Selection -->
          <div class="mb-3">
            <label for="book_id" class="form-label">Book</label>
            <?php
            $booksList = selectBooksForInput(); // Function to get available books
            $selectedBooks = 0;
            include "view-books-input-list.php"; // Include the list of books for selection
            ?>
          </div>
          
          <!-- Review Text -->
          <div class="mb-3">
            <label for="reviewText" class="form-label">Review</label>
            <textarea class="form-control" id="reviewText" name="reviewText" rows="3" required></textarea>
          </div>

          <!-- Rating -->
          <div class="mb-3">
            <label for="rating" class="form-label">Rating (1 to 5)</label>
            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
          </div>

          <!-- Hidden Action Type -->
          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
