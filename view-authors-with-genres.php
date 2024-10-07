<h1>Author's books with genres</h1>
<div class="card-group">
<?php
while($author=$authors->fetch_assoc()){
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $author["author_name"];?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $genres = selectGenresByAuthor($author["author_id"]);
  while ($genre =  $genres->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $genre["genre"];?> - <?php echo $genre["title"];?> - <?php echo $genre["book_series"];?> - <?php echo $genre["publication_date"];?></li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Publisher: <?php echo $author["author_birthdate"];?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
