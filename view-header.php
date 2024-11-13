<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <!-- Link to Bootswatch Quartz theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/quartz/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Custom style to add rounded corners to the navbar */
      .navbar-custom {
        border-radius: 15px; /* Adjust the value to control the roundness */
      }
    </style>
  </head>
  <body>
    <!-- Navbar without the .container wrapper -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="authors.php">Authors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="genres.php">Genres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="publishers.php">Publishers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="authors-with-genres.php">Authors with genres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="books.php">Books</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bootstrap JS (optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+e4I7kPsR93p1kD80Psrw5Yp1g6g7" crossorigin="anonymous"></script>
  </body>
</html>
