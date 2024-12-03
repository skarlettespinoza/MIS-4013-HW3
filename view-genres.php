<div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-center mb-0">Genres</h1>
    <?php include "view-genres-newform.php"; ?>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
          <th>Genre</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>Books</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($genre = $genres->fetch_assoc()) { ?>
          <tr>
            <td class="fw-bold"><?php echo htmlspecialchars($genre["genre"]); ?></td>
            <td>
              <?php include "view-genres-editform.php"; ?>
            </td>
            <td>
              <form method="post" action="" class="d-inline">
                <input type="hidden" name="gid" value="<?php echo $genre["genre_id"]; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this genre?');">
                  <i class="bi bi-trash3"></i> Delete
                </button>
              </form>
            </td>
            <td>
              <form method="post" action="books-by-genre.php" class="d-inline">
                <input type="hidden" name="gid" value="<?php echo $genre["genre_id"]; ?>">
                <input type="hidden" name="genre_name" value="<?php echo htmlspecialchars($genre["genre"]); ?>">
                <button type="submit" class="btn btn-sm btn-secondary" style="background-color: #f72f97; border-color: #f72f97;">
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
