<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-center mb-0">Genres</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
          <th scope="col">Genre</th>
          <th scope="col">Title</th>
          <th scope="col">Book Series</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($genre = $genres->fetch_assoc()) { ?>
          <tr>
            <td class="fw-bold"><?php echo htmlspecialchars($genre["genre"]); ?></td>
            <td><?php echo htmlspecialchars($genre["title"]); ?></td>
            <td><?php echo htmlspecialchars($genre["book_series"]); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
