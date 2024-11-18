<h1>Books by publisher</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Publishing Company</th>
      <th>Headquarters</th>
      <th>Title</th>
      <th>Book Series</th>
      <th>Publication Date</th>
      <th>Review</th>
      </tr>
    </thead>
    <tbody>
<?php
while($book=$books->fetch_assoc()){
?>
  <tr>
    <td><?php echo $book["publisher_id"];?></td> 
    <td><?php echo $book["publisher_name"];?></td>
    <td><?php echo $book["location"];?></td>
    <td><?php echo $book["title"];?></td>
    <td><?php echo $book["book_series"];?></td>
    <td><?php echo $book["publication_date"];?></td>
    <td><?php echo $book["review"];?></td>    
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
