<select class="form-select" id="bid" name="bid">
<?php
while ($booksItem = $booksList->fetch_assoc()) {
  $selText = "";
  if($selectedBooks==$booksItem['book_id']){
    $selText="selected";
  }
?>
  <option value="<?php echo $booksItem['book_id']; ?>"<?=$selText?>><?php echo $booksItem['titke']; ?></option>  
<?php
}
?>
</select>
