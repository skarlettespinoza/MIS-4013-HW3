<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Publisher</th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while($author=$authors->fetch_assoc()){
?>
  <tr>
    <td><?php echo $author["author_id"];?></td> 
    <td><?php echo $author["author_name"];?></td>
    <td><?php echo $author["publisher_name"];?></td>
    <td><a href="genre-by-author.php?id=<?php echo $author["author_id"];?>">Genre</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
