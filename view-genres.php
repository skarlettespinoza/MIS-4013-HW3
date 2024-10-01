<h1>Gneres</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Genre</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while($genre=$genres->fetch_assoc()){
?>
  <tr>
    <td><?php echo $genre["genre_id"];?></td> 
    <td><?php echo $genre["genre"];?></td>
    <td>
      <form method="post" action="books-by-genre.php">
        <input type="hidden" name="gid" value="<?php echo $genre["genre_id"];?>">
        <button type="submit" class="btn btn-primary">Books</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
