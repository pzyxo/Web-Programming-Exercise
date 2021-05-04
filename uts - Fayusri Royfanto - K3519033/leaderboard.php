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
    <nav class="navbar navbar-dark">
        <div class="container">
        <a class='btn btn-outline-primary btn-sm' href='index.php'>Home</a>

        <?php

        if(isset($_COOKIE['nama'])){
        ?>
            <a class='btn btn-outline-danger btn-sm' href='logout.php'>Log Out</a>
        <?php
        }
        ?>
        </div>
    </nav>
    <div class="container container-fluid" style="position: absolute; top:40%; left:50%;z-index: 2;transform: translate(-50%, -40%);width: 80%; text-align:center;color: white;">
    
    <?php
    include('dbconnect.php');
    
    $dbhost = 'sql306.epizy.com';
    $dbusername = 'epiz_28497488';
    $dbpassword = 'W9kqWP6gjy5t7a';
    $dbname = 'epiz_28497488_mathgame';
    $dbtable = 'leaderboard';
    $dbport = 3306;
    leaderboard($dbhost, $dbusername, $dbpassword, $dbname, $dbtable, $dbport);
    ?>
</div>
</body>
</html>