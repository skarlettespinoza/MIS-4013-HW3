<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-center mb-0">Publishers</h1>
    <div class="col-auto">
      <?php include "view-publishers-newform.php"; ?>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
          <th scope="col">Publishing Company</th>
          <th scope="col">Headquarters</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
          <th scope="col">Books</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($publisher = $publishers->fetch_assoc()) { ?>
          <tr>
            <td class="fw-bold"><?php echo htmlspecialchars($publisher["publisher_name"]); ?></td>
            <td><?php echo htmlspecialchars($publisher["location"]); ?></td>
            <td>
              <?php include "view-publishers-editform.php"; ?>
            </td>
            <td>
              <form method="post" action="" class="d-inline-block">
                <input type="hidden" name="pid" value="<?php echo $publisher["publisher_id"]; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this publisher?');">
                  <i class="bi bi-trash3"></i> Delete
                </button>
              </form>
            </td>
            <td>
              <form method="post" action="books-by-publisher.php" class="d-inline-block">
                <input type="hidden" name="pid" value="<?php echo $publisher["publisher_id"]; ?>">
                <input type="hidden" name="publisher_name" value="<?php echo htmlspecialchars($publisher["publisher_name"]); ?>">
                <button type="submit" class="btn btn-sm" style="background-color: #f72f97; border-color: #f72f97;">
                  <i class="bi bi-book"></i> View Books
                </button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- CSS to make the delete buttons consistent -->
<style>
  /* General Button Styling for Delete */
  .btn-danger {
    background-color: #dc3545; /* Red color for delete buttons */
    border-color: #dc3545;
    color: white; /* Ensures text is visible */
  }

  .btn-danger:hover {
    background-color: #c82333; /* Darker red on hover */
    border-color: #bd2130;
  }

  /* Publisher Button Styling */
  .btn-sm {
    font-size: 0.875rem;
  }

  .btn-sm:hover {
    text-decoration: none;
  }

  /* Table Styling */
  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
  }

  .table-bordered {
    border: 1px solid #dee2e6;
  }

  .table-hover tbody tr:hover {
    background-color: #f1f1f1;
  }

  .table-light th {
    background-color: #f8f9fa;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .table-responsive {
      overflow-x: auto;
    }
  }
</style>
