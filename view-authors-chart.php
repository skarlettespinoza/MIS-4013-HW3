<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authors Chart</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Google Font for a modern look -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f4f4f9; /* Light grey background for a clean feel */
      color: #333; /* Dark text for good readability */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h1 {
      text-align: center;
      font-size: 2.5rem;
      color: #2c3e50; /* Dark color for the title */
      margin-bottom: 30px;
    }

    .chart-container {
      background-color: #fff; /* White background for the chart container */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for the container */
      border-radius: 10px; /* Rounded corners for a modern look */
      padding: 30px;
      max-width: 900px;
      width: 100%;
      margin: auto;
    }

    canvas {
      width: 100%;
      height: 500px;
    }

    /* Adding responsive design tweaks */
    @media (max-width: 768px) {
      .chart-container {
        padding: 20px;
        max-width: 100%;
      }

      h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <div class="chart-container">
    <h1>Authors Chart</h1>
    <canvas id="myChart"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [
          <?php
          $authors = selectAuthors();
          $labels = [];
          $data = [];
          while($author = $authors->fetch_assoc()) {
              $labels[] = "'" . $author['author_name'] . "'";
              $data[] = $author['num_books'];
          }
          echo implode(", ", $labels);
          ?>
        ],
        datasets: [{
          label: 'Number of Books',
          data: [
            <?php
            echo implode(", ", $data);
            ?>
          ],
          backgroundColor: 'rgba(255, 182, 193, 0.5)', /* Light pink with opacity */
          borderColor: 'rgba(255, 105, 180, 1)', /* Darker pink for the border */
          borderWidth: 1
        }]
      },
      options: {
        responsive: true, /* Make the chart responsive */
        maintainAspectRatio: false, /* Allow height customization */
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>
