

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Math Game</title>
<head>
<body style='background:black;color:white'>
    
    <?php

    if (!isset($_COOKIE['nama'])){
        ?>
        <nav class="navbar navbar-dark">
        <div class="container">
        <a class='btn btn-outline-warning btn-sm' href='leaderboard.php'>Leaderboard</a>
        </div>
    </nav>
    <div class="container container-fluid" style="position:absolute;top:25%;left:8%;text-align:center">
    <?php
        
        echo "<p><h1>Maaf anda tidak memiliki akses ke halaman ini</h1></p>";
        echo "<h4><p>Silahkan <a href='index.php' class='btn btn-primary btn-lg'>Log In</a> terlebih dahulu</p></h4>";
        exit();
    }

    ?>
    </div>
</body>
</html>