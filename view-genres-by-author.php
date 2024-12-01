<h1>Genres</h1>
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
while($genre=$genres->fetch_assoc()){
?>
  <tr>
    <td><?php echo $genre["genre"];?></td>
    <td><?php echo $genre["title"];?></td>
    <td><?php echo $genre["book_series"];?></td> 
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
