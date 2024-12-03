<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $genre_name = isset($_POST['genre_name']) ? htmlspecialchars($_POST['genre_name']) : "Unknown Genre";
    $gid = isset($_POST['gid']) ? intval($_POST['gid']) : 0;

    // Query the books for the given genre ID
    // (Assuming you already have the logic to fetch $books based on $gid)
}
?>

<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-center mb-0">Books in <?php echo $genre_name; ?></h1>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Book Series</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($book = $books->fetch_assoc()) { ?>
          <tr>
            <td class="fw-bold"><?php echo htmlspecialchars($book["title"]); ?></td>
            <td><?php echo htmlspecialchars($book["book_series"]); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
