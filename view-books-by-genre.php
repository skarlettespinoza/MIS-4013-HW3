<h1>Books by genre</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Genre</th>
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
    <td><?php echo $book["genre"];?></td>
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
