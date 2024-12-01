<h1>Authors Chart</h1>
<div>
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
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
