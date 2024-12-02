<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $publisher_name = isset($_POST['publisher_name']) ? htmlspecialchars($_POST['publisher_name']) : "Unknown Publisher";
    $pid = isset($_POST['pid']) ? intval($_POST['pid']) : 0;

    // Query the books for the given publisher ID
    // (Assuming you already have the logic to fetch $books based on $pid)
}
?>

<div class="container my-4">
  <h1 class="text-center">Books by <?php echo $publisher_name; ?></h1>

  <div class="table-responsive mt-4">
    <table class="table table-bordered table-hover text-center">
      <thead class="thead-light">
        <tr>
          <th>Title</th>
          <th>Book Series</th>
          <th>Publication Date</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($book = $books->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $book["title"]; ?></td>
            <td><?php echo $book["book_series"]; ?></td>
            <td><?php echo $book["publication_date"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
