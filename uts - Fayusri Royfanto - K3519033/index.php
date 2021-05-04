<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Math Game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </head>
    <body style="background:black">
        <nav class="navbar navbar-dark">
            <div class="container">
            <a class='btn btn-outline-warning btn-sm' href='leaderboard.php'>Leaderboard</a>

            <?php

            if(isset($_COOKIE['nama'])){
            ?>
                <a class='btn btn-outline-danger btn-sm' href='logout.php'>Log Out</a>
                <?php
            }
            ?>
            </div>
        </nav>
        <div class="container container-fluid" style="position: absolute; top:40%; left:50%;z-index: 2;transform: translate(-50%, -40%);width: 50%; text-align:center;color: white;">
        <p><h1>WELCOME TO THE MATH GAME</h1></p>
        <br>
        <!-- <div class="row">
        <div class="col align-self-center">
         -->
        <?php
            if(!isset($_COOKIE['nama'])){
                ?>

                <h4>LOG IN</h4>
                <br>
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>

                <?php
            } else {
                echo "Hallo ".$_COOKIE['nama'].", selamat datang kembali di permainan ini!!";
                ?>
                <p><a class="btn btn-primary" href='game.php'>Start Game</a></p>
                <?php
                echo "<p>Bukan Anda? <a href='logout.php'>(klik di sini)</a></p>
                ";
            }
                ?>
                <!-- </div>
            </div> -->
        </div>
    </body>
</html>