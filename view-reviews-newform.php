<!-- Button to trigger modal -->
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
        <h1 class="modal-title fs-5" id="newReviewModalLabel">Add Review</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="addReview.php">
          <div class="mb-3">
            <label for="book_id" class="form-label">Book</label>
<?php
$booksList = selectBooksForInput(); // Function to fetch books
$selectedBook = 0; // Default selection
include "view-books-input-list.php"; // Generates a dropdown of books
?>
          </div>
          <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea class="form-control" id="review" name="review"></textarea>
          </div>
          <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5">
          </div>
          <div class="mb-3">
            <label for="review_date" class="form-label">Review Date</label>
            <input type="date" class="form-control" id="review_date" name="review_date">
          </div>
          <input type="hidden" name="actionType" value="AddReview">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
