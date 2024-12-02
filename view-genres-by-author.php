<div class="container my-4">
  <h1 class="text-center">Genres</h1>
  
  <div class="table-responsive mt-4">
    <table class="table table-bordered table-hover text-center">
      <thead class="thead-light">
        <tr>
          <th>Genre</th>
          <th>Title</th>
          <th>Book Series</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($genre = $genres->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $genre["genre"]; ?></td>
            <td><?php echo $genre["title"]; ?></td>
            <td><?php echo $genre["book_series"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
