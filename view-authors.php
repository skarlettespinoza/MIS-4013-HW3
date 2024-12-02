<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authors</title>
  
  <!-- Bootswatch Quartz Theme CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/quartz/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff; /* Set the body background color to white */
      margin-bottom: 0; /* Remove any default margin at the bottom */
    }

    .container {
      max-width: 1200px;
      margin: 0 auto; /* Ensure the container is centered */
      padding: 20px;
      background-color: #fff; /* Set the container background color to white */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 32px;
      color: #333;
      margin-bottom: 20px;
    }

    .row {
      margin-bottom: 20px;
    }

    .table-responsive {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
      background-color: #fff; /* Set the table background color to white */
    }

    th {
      background-color: #d63384; /* Quartz primary pink color */
      color: white;
      padding: 12px;
      font-weight: bold;
    }

    td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e9ecef;
    }

    .btn {
      padding: 6px 12px;
      font-size: 14px;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn-sm {
      padding: 5px 10px;
      font-size: 12px;
    }

    /* Delete button (danger color) */
    .btn-danger {
      background-color: #d9534f;
      color: white;
    }

    .btn-danger:hover {
      background-color: #c9302c;
    }

    /* Edit and Genre buttons (success color) */
    .btn-success {
      background-color: #5cb85c;
      color: white;
    }

    .btn-success:hover {
      background-color: #4cae4c;
    }

    /* Custom styles for the navbar */
    .navbar {
      background-color: #d63384; /* Quartz primary pink color */
    }

    .navbar-dark .navbar-nav .nav-link {
      color: white;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
      color: #ddd;
    }

    .col-auto {
      display: flex;
      align-items: center;
    }

    .form-container {
      margin-left: 10px;
    }

    .svg-icon {
      width: 18px;
      height: 18px;
    }
  </style>
</head>
<body>

  <div class="container my-4">
    <div class="row justify-content-between align-items-center">
      <div class="col">
        <h1 class="text-center">Authors</h1>
      </div>
      <div class="col-auto">
        <div class="form-container">
          <?php include "view-authors-newform.php"; ?>
        </div>
      </div>
    </div>

    <div class="table-responsive mt-4">
      <table class="table table-bordered table-hover">
        <thead class="thead-light">
          <tr>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Genre</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($author = $authors->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $author["author_name"]; ?></td>
              <td><?php echo $author["author_birthdate"]; ?></td>
              <td><?php echo $author["author_age"]; ?></td>
              <td>
                <?php include "view-authors-editform.php"; ?>
              </td>
              <td>
                <form method="post" action="">
                  <input type="hidden" name="aid" value="<?php echo $author["author_id"]; ?>">
                  <input type="hidden" name="actionType" value="Delete">
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                  </button>
                </form>
              </td>
              <td><a href="genre-by-author.php?id=<?php echo $author["author_id"]; ?>" class="btn btn-success btn-sm">View Genres</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
