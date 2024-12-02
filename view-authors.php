<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }

    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333;
      font-size: 36px;
      margin-bottom: 30px;
    }

    .table-responsive {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th {
      background-color: #007bff;
      color: white;
      font-weight: bold;
      padding: 12px;
      text-align: center;
    }

    td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e9ecef;
    }

    a {
      color: #007bff;
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      text-decoration: underline;
    }

    .btn-genre {
      color: #fff;
      background-color: #007bff;
      padding: 6px 12px;
      border-radius: 4px;
      text-decoration: none;
    }

    .btn-genre:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Authors</h1>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>Age</th>
            <th>Genre</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($author=$authors->fetch_assoc()){
          ?>
            <tr>
              <td><?php echo $author["author_id"];?></td>
              <td><?php echo $author["author_name"];?></td>
              <td><?php echo $author["author_birthdate"];?></td>
              <td><?php echo $author["author_age"];?></td>
              <td><a href="genre-by-author.php?id=<?php echo $author["author_id"];?>" class="btn-genre">View Genres</a></td>
            </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
