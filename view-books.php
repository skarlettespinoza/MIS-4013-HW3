<h1>Books</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Title</th> 
      <th>Book Series</th>
      <th>Genre</th>
      <th>Publication Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while($book=$books->fetch_assoc()){
?>
  <tr>
    <td><?php echo $book["book_id"];?></td> 
    <td><?php echo $book["title"];?></td>
    <td><?php echo $book["book_series"];?></td>
    <td><?php echo $genre["genre"];?></td>    
    <td><?php echo $book["publication_date"];?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
