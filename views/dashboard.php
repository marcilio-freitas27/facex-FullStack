<?php 

$sql = "SELECT count(id) as count from cadastro";
$sql_acompanhante = "SELECT count(acompanhante) as acompanhante from cadastro where acompanhante = 'sim'";

$query = mysqli_query($con,$sql);
$query_acompanhante = mysqli_query($con,$sql_acompanhante);
$row_acompanhante = mysqli_fetch_assoc($query_acompanhante);

foreach ($query as $linha){
    $id = $linha['count'];
?>

<canvas class="" id="myChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script type="text/javascript">
/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Funcionarios',
        'Responderam o questionário',
        'Máscaras',
        'Álcool',
        'Acompanhantes',
      ],
      datasets: [{
        data: [
          <?php echo $id?>,
          <?php echo $id + $row_acompanhante['acompanhante']?>,
          <?php echo $id + $row_acompanhante['acompanhante']?>,
          <?php echo $id + $row_acompanhante['acompanhante']?>,
          <?php echo $row_acompanhante['acompanhante']?>,
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    }
    ,
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()

</script>

<?php }?>



