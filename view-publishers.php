<div class="row">
  <div class="col">
<h1>Publishers</h1>    
  </div>
  <div class="col-auto">
<?php
include "view-publishers-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Publishing Company</th>
      <th>Headquarters</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while($publisher=$publishers->fetch_assoc()){
?>
  <tr>
    <td><?php echo $publisher["publisher_id"];?></td> 
    <td><?php echo $publisher["publisher_name"];?></td>
    <td><?php echo $publisher["location"];?></td>
    <td>
      <form method="post" action="books-by-publisher.php">
        <input type="hidden" name="pid" value="<?php echo $publisher["publisher_id"];?>">
        <button type="submit" class="btn btn-primary">Books</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
