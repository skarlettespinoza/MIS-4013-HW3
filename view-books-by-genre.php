<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $genre_name = isset($_POST['genre_name']) ? htmlspecialchars($_POST['genre_name']) : "Unknown Genre";
    $gid = isset($_POST['gid']) ? intval($_POST['gid']) : 0;

    // Query the books for the given genre ID
    // (Assuming you already have the logic to fetch $books based on $gid)
}
?>

<div class="container my-4">
  <h1 class="text-center">Books in <?php echo $genre_name; ?></h1>

  <div class="table-responsive mt-4">
    <table class="table table-bordered table-hover text-center">
      <thead class="thead-light">
        <tr>
          <th>Title</th>
          <th>Book Series</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($book = $books->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $book["title"]; ?></td>
            <td><?php echo $book["book_series"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
