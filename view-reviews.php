<div class="row">
  <div class="col">
    <h1>Books with Reviews</h1>
  </div>
  <div class="col-auto">  
    <?php
    include "view-reviews-newform.php"; // Form to add a new review
    ?>
  </div>
</div>  
<div class="card-group">
<?php
while($book=$books->fetch_assoc()){ // Assume $books contains the list of books
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $book["title"];?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $reviews = selectReviewsByBook($book["book_id"]); // Fetch reviews for the current book
  while ($review = $reviews->fetch_assoc()){
?>
        <li class="list-group-item">
          <?php echo $review["review"];?> - Rating: <?php echo $review["rating"];?>/5 - Date: <?php echo $review["review_date"];?>
        </li>

        <li class="list-group-item">
          <?php include "view-reviews-editform.php"; // Form to edit a review ?>
        </li>
        <li class="list-group-item">
          <form method="post" action="">
            <input type="hidden" name="review_id" value="<?php echo $review["review_id"];?>">
            <input type="hidden" name="actionType" value="Delete">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
              </svg>
            </button>
          </form>      
        </li>       
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Author: <?php echo $book["author_name"];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
