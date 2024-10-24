<select class="form-select" id="pid" name="pid">
<?php
while ($publishersItem = $publishersList->fetch_assoc()) {
  $selText = "";
  if($selectedPublishers==$publishersItem['publisher_id']){
    $selText="selected";
  }
?>
  <option value="<?php echo $publishersItem['publisher_id']; ?>"<?=$selText?>><?php echo $publishersItem['publisher_name']; ?></option>  
<?php
}
?>
</select>
