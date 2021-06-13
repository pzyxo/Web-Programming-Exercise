<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Highchart - K3519033 - Fayusri Royfanto</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pzyxooo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Tinggi Muka Air</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ch.php">Curah Hujan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kekeruhan.php">Kekeruhan Air</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="combi.php">Kombinasi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <main>
    <div class="container mt-3">
      <?php
      include 'koneksi.php';
      $kekeruhan = mysqli_query($koneksi, "select * from kekeruhan");
      $data = array();
      while($row = mysqli_fetch_array($kekeruhan)){
      array_push($data, "['".$row['waktu']."', ".$row['nilai']."] ");
      }
      ?>
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Grafik Kekeruhan Air</h5>
              <hr>
              <div id="grafik"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script type="text/javascript">
    Highcharts.chart('grafik', {
      chart: {
        type: 'area'
      },
      title: {
        text: 'Kekeruhan Air',
        },
      subtitle: {
        text: 'Latihan Highcharts'
        },
      yAxis: {
        min: 45,
        max: 60,
        title: {
          text: 'Nilai Kekeruhan'
        }
      },
      xAxis: {
        type: 'category',
        accessibility: {
          rangeDescription: 'Waktu'
        }
      },
      tooltip: {
        pointFormat: '{point.y} NTU',
        shared: true
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
      },

      series: [{
        name: 'Kekeruhan Air',
        data: [<?= join(',', $data) ?>],
        color: {
        linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
        stops: [
            [0, '#ff9f45'],
            [1, 'white']
        ]}
      }],
      responsive: {
        rules: [{
          condition: {
            maxWidth: 500
          },
          chartOptions: {
            legend: {
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
            }
          }
        }]
      }
    });
  </script>
  </body>
</html>