<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $publisher_name = isset($_POST['publisher_name']) ? htmlspecialchars($_POST['publisher_name']) : "Unknown Publisher";
    $pid = isset($_POST['pid']) ? intval($_POST['pid']) : 0;

    // Query the books for the given publisher ID
    // (Assuming you already have the logic to fetch $books based on $pid)
}
?>

<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold text-center mb-0">Books by <?php echo $publisher_name; ?></h1>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Book Series</th>
          <th scope="col">Publication Date</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($book = $books->fetch_assoc()) { ?>
          <tr>
            <td class="fw-bold"><?php echo htmlspecialchars($book["title"]); ?></td>
            <td><?php echo htmlspecialchars($book["book_series"]); ?></td>
            <td><?php echo htmlspecialchars($book["publication_date"]); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
