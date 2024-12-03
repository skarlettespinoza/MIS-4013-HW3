<div class="container my-4">
  <div class="row align-items-center mb-3">
    <div class="col text-center">
      <h1 class="display-4">Publishers</h1>
    </div>
    <div class="col-auto">
      <?php include "view-publishers-newform.php"; ?>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="thead-light">
        <tr>
          <th>Publishing Company</th>
          <th>Headquarters</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>Books</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($publisher = $publishers->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $publisher["publisher_name"]; ?></td>
            <td><?php echo $publisher["location"]; ?></td>
            <td>
              <?php include "view-publishers-editform.php"; ?>
            </td>
            <td>
              <form method="post" action="" class="d-inline">
                <input type="hidden" name="pid" value="<?php echo $publisher["publisher_id"]; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                  <i class="bi bi-trash3"></i>
                </button>
              </form>
            </td>
            <td>
              <form method="post" action="books-by-publisher.php" class="d-inline">
                <input type="hidden" name="pid" value="<?php echo $publisher["publisher_id"]; ?>">
                <input type="hidden" name="publisher_name" value="<?php echo htmlspecialchars($publisher["publisher_name"]); ?>">
                <button type="submit" class="btn btn-primary">Books</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
