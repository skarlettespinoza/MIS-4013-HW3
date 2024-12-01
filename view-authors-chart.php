<h1>Authors Chart</h1>
<div style="max-width: 600px; margin: auto;">
  <!-- Set max-width to control chart size -->
  <canvas id="myChart" style="width:100%; height:300px;"></canvas>
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
        backgroundColor: 'rgba(32, 201, 151, 0.2)', /* Minty secondary color with opacity */
        borderColor: 'rgba(32, 201, 151, 1)', /* Minty secondary color */
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
