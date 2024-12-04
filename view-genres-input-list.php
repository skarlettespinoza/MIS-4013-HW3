<select class="form-select" id="gid" name="gid">
<?php
while ($genresItem = $genresList->fetch_assoc()) {
  $selText = "";
  if($selectedGenres == $genresItem['genre_id']){
    $selText = "selected";  // Set the "selected" attribute when the genre_id matches
  }
?>
  <option value="<?php echo $genresItem['genre_id']; ?>" <?=$selText?>><?php echo $genresItem['genre']; ?></option>  
<?php
}
?>
</select>
