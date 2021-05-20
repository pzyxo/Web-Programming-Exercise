<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- php -->
    <?php

    include_once("dbconnect.php");
    $result = mysqli_query($mysqli, "SELECT * FROM data_karyawan ORDER BY id_karyawan ASC");
    ?>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container container-fluid" style="position: absolute; top:10%; left:8%;z-index: 2;transform;width: 100%; text-align:center;color: white;">
    
    <a class='btn btn-outline-primary btn-sm' name='add' href='add.php'>Add</a>
    <br>
    <table border='2' class="table table-dark table-bordered border-light">
        <tr class='table-light'>
        <th>ID Karyawan.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Edit</th>
        
        </tr>
    
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>{$row['id_karyawan']}</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['email']}</td>";
            echo"<td>{$row['telepon']}</td>";
            echo"<td>{$row['alamat']}</td>";
            echo"<td>{$row['jenis kelamin']}</td>";
            echo"<td>{$row['tempat lahir']}</td>";
            echo"<td>{$row['tanggal lahir']}</td>";
            echo"<td><a class='btn btn-outline-warning btn-sm' name='edit' href='edit.php'>Edit</a>
            <a class='btn btn-outline-danger btn-sm' name='delete' href='delete.php'>Delete</a></td>";

        }
        ?>
        </table>
    
    </div>

    
  </body>
</html>