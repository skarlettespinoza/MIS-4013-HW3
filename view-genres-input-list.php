<select class="form-select" id="gid" name="gid">
<?php
while ($genresItem = $genresList->fetch_assoc()) {
  $selText = "";
  if($selectedGenres==$GenresItem['genre_id']){
    $selText="selected";
  }
?>
  <option value="<?php echo $genresItem['genre_id']; ?>"<?=$selText?>><?php echo $genresItem['genre']; ?></option>  
<?php
}
?>
</select>
