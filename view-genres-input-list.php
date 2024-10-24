<select class="form-select" id="gid" name="gid">
<?php
while ($genresItem = $genresList->fetch_assoc()){
?>
    <option value="<?php echo $genresItem['genre_id']; ?>"><?php echo $genresItem['genre']; ?></option>
<?php  
} 
?>
