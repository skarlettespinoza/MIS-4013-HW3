<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <!-- Link to Bootswatch Minty theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css" rel="stylesheet">

    <style>
      /* Background image styling for the homepage */
      html, body {
        margin: 0;
        padding: 0;
        background-image: url('https://4kwallpapers.com/images/wallpapers/lofi-girl-reading-3840x2160-14889.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        color: white; /* Optional: Adjust text color for readability */
        overflow-x: hidden; /* Prevent horizontal scroll */
      }

      .navbar {
        margin-bottom: 0; /* Removes default margin below navbar */
      }

      .container {
        background: rgba(0, 0, 0, 0.5); /* Optional: Darken background behind text */
        padding: 20px;
        border-radius: 8px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar with the primary color from the Minty theme -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

    <!-- Main content container -->
    <div class="container">
      <!-- Your main page content goes here -->
    </div>

    <!-- Bootstrap JS (optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+e4I7kPsR93p1kD80Psrw5Yp1g6g7" crossorigin="anonymous"></script>
  </body>
</html>
