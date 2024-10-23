<select class="form-select" id="iid" name="iid">
<?php
while ($authorsItem = $authorsList->fetch_assoc()) {
  $selText = "";
  if($selectedAuthors==$authorsItem['author_id']){
    $selText="selected";
  }
?>
  <option value="<?php echo $authorsItem['author_id']; ?>"<?=$selText?>><?php echo $authorsItem['author_name']; ?></option>  
<?php
}
?>
</select>
