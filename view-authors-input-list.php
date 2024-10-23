<select class="form-select" id="iid" name="iid">
<?php
while ($authorsItem = $authorsList->fetch_assoc()) {
?>
  <option value="<?php echo $authorsItem['author_id']; ?>"><?php echo $authorsItem['author_name']; ?></option>  
<?php
}
?>
</select>
