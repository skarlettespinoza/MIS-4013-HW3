<select class="form-select" id="pid" name="pid">
<?php
while ($publishersItem = $publishersList->fetch_assoc()){
?>
    <option value="<?php echo $publishersItem['publisher_id']; ?>"><?php echo $publishers_Item['publisher_name']; ?></option>
<?php  
} 
?>
