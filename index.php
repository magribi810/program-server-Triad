<?php 
include 'datacontainer.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- semantic UI -->
    <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
    <!--Chart js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <title>nitrit konsentrasi</title>
  </head>
  <body>
  <script>
  $(document).ready(function(){
        var ctx = document.getElementById('myChart').getContext('2d');
var delayed;

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['A', 'B', 'C', 'D', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S'],
        datasets: [{
            label: 'Grafik dari Konsentrasi nitrit',
            data: [<?php echo $a ?>, <?php echo $b ?>, <?php echo $c ?>, <?php echo $d ?>, 
            <?php echo $e ?>, <?php echo $f ?>, <?php echo $g ?>, <?php echo $h ?>, 
            <?php echo $i ?>, <?php echo $j ?>, <?php echo $k ?>, <?php echo $l ?>, 
            <?php echo $m ?>, <?php echo $n ?>, <?php echo $o ?>, <?php echo $p ?>, 
            <?php echo $q ?>, <?php echo $r ?>],
            borderColor: 'rgb(75, 192, 192)',
            fill: false,
            borderWidth: 3,
            
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
});
</script>

<canvas id="myChart" width="100" height="100"></canvas>
  </body>
</html>

