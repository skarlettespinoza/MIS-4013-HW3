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
    datasets: [{
        data: [
<?php
while($author=$authors->fetch_assoc()){
  echo $author['num_books'] . ", ";
}  
?>          
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$authors = selectAuthors();
while($author=$authors->fetch_assoc()){
  echo "'" . $author['author_name'] . "', ";
}  
?> 
    ]
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
