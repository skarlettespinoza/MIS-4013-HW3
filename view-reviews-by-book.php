<h1>Reviews by Book</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th><div>Review ID</div></th>
        <th><div>Review</div></th>
        <th><div>Rating</div></th>
        <th><div>Review Date</div></th>
      </tr>
    </thead>
    <tbody>
<?php
while($review = $reviews->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $review["review_id"]; ?></td>
    <td><?php echo nl2br($review["review"]); // To handle line breaks in the review ?></td>
    <td><?php echo $review["rating"]; ?></td>
    <td><?php echo $review["review_date"]; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
