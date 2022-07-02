<?php
include 'layout/index.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <br>
    <h3>Melihat data pembayaran tertinggi dalam seminggu</h3>

<?php
    $conn = mysqli_connect("localhost", "root", "", "jualbarangbekas");
    $query = $conn->query("
        SELECT waktu_bayar, total_harga 
        FROM pembayaran 
        WHERE waktu_bayar >= '2022-06-01' AND waktu_bayar < '2022-06-12'
    ");

    foreach($query as $data)
    {
        $waktu[] = $data['waktu_bayar'];
        $total[] = $data['total_harga'];
    }
?>

<div class="cart" style="width: 600px">
  <canvas id="myChart" width="300" height="300"></canvas>
</div>

<script>
    const labels = <?php echo json_encode($waktu)?>;
    const data = {
        labels: labels,
        datasets: [{
            label: '',
            data: <?php echo json_encode($total)?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                y: {
                  beginAtZero: true
                }
                }
            },
        };

    const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
    
</body>
</html>