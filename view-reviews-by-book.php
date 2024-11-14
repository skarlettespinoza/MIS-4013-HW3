<h1>Reviews by Book</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Review ID</th>
        <th>Review</th>
        <th>Rating</th>
        <th>Review Date</th>
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
