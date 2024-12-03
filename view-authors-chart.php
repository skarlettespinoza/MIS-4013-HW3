<h1>Authors Chart</h1>
<div style="max-width: 800px; margin: auto;"> <!-- Increased max-width to 800px -->
  <canvas id="myChart" style="width:100%; height:500px;"></canvas> <!-- Increased height to 500px -->
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
