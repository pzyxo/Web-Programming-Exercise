<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  
    


    <title>Pertemuan 13</title>
  </head>
  <body style='background: black'>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pzyxooo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Client Side</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="serverside.php">Server Side</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <main>
    <div class="container mt-3" >
      <div class="row d-flex justify-content-center">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Tinggi Permukaan Air</h5>
              <hr>
              <table id="tabel-data" width="100%" class="table table-dark">
                <thead class='table-secondary'>
                  <tr>
                    <th>No</th>
                    <th>Nilai</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include ('koneksi.php');
                  $tma = mysqli_query($koneksi, "SELECT * FROM tma ORDER BY waktu DESC");
                  while ($row = mysqli_fetch_array($tma)) {
                    echo "<tr>
                    <td>{$row['id_tma']}</td>
                    <td>{$row['nilai']} meter </td>
                    <td>{$row['waktu']}</td>
                    <td><button class='btn btn-info'>Edit</button>
                    <button class='btn btn-danger'>Hapus</button></td>
                    </tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#tabel-data').DataTable({
        'info': false, 
        'order': [2,"desc"]
      });
    });
  </script>

  </body>
</html>