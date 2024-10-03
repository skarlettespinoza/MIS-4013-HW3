<h1>Publishers</h1>
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
      <form method="post" action="authors-by-publisher.php">
        <input type="hidden" name="pid" value="<?php echo $publisher["publisher_id"];?>">
        <button type="submit" class="btn btn-primary">Authors</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
