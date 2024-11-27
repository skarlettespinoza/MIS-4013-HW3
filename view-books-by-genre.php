<h1>Books by genre</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Genre</th>
      <th>Title</th>
      <th>Book Series</th>
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
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
