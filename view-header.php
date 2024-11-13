<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <!-- Link to Bootswatch Minty theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css" rel="stylesheet">

    <style>
      /* Apply the background image to the body */
      body {
        background-image: url('https://img.freepik.com/free-vector/hand-drawn-cottagecore-pattern_23-2150998343.jpg?t=st=1731529270~exp=1731532870~hmac=1b46cad8d91201709c7125bfe664387a7f3a4c30ceeef3c4cf474a27b84a3675&w=740');
        background-size: cover; /* Ensure the background covers the entire screen */
        background-position: center; /* Center the background image */
        background-attachment: fixed; /* Keep the background fixed while scrolling */
        color: white; /* Adjust text color for readability */
      }

      /* Optional: Adjust the padding to ensure content doesn't overlap with navbar */
      .container {
        padding-top: 60px; /* Adjust padding as necessary */
      }
    </style>
  </head>
  <body>
    <!-- Navbar with the primary color from the Minty theme -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary container-fluid">
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
      <h1>Welcome to the Homepage</h1>
      <p>This is the homepage with a cottagecore pattern background.</p>
    </div>

    <!-- Bootstrap JS (optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+e4I7kPsR93p1kD80Psrw5Yp1g6g7" crossorigin="anonymous"></script>
  </body>
</html>
