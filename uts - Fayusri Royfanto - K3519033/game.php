<?php
include('cek.php');
include('dbconnect.php');
?>

<!doctype html>
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
            <a class='btn btn-outline-danger btn-sm' href='logout.php'>Log Out</a>
            </div>
        </nav>

        
        <div class="container container-fluid" style="position: absolute; top:40%; left:50%;z-index: 2;transform: translate(-50%, -40%);width: 80%; text-align:center;color: white;">
        
        <?php
        session_start();
        $dbhost = 'sql306.epizy.com';
        $dbusername = 'epiz_28497488';
        $dbpassword = 'W9kqWP6gjy5t7a';
        $dbname = 'epiz_28497488_mathgame';
        $dbtable = 'leaderboard';
        $dbport = 3306;

        echo "<center>";
        if ($_SESSION['lives'] < 1){
            insertData($dbhost, $dbusername, $dbpassword, $dbname, $dbtable, $dbport, $_COOKIE['nama'], $_SESSION['score']);
            $_SESSION['lives'] = 5;
            $_SESSION['score'] = 0;
            header('Location:game.php');
        } else {
            echo "<h3>";
            echo "Hello ".$_COOKIE['nama']." tetap semangat ya... you can do the best!!";
            echo "<br>Lives: <".$_SESSION['lives']."> | Score: <".$_SESSION['score']."></h3><br>";
            echo "<p><form method='post'>";
             
            $hasil = $_SESSION['angka1'] + $_SESSION['angka2'];
            
            if(!isset($_POST['submit'])){
            echo "<h4>Berapakah ".$_SESSION['angka1']." + ".$_SESSION['angka2']." = <br>";
            echo"
            <input type='text' class='form-control-sm' name='jawaban'>
            <button type='submit' class='btn btn-outline-primary btn-sm' name='submit'>Jawab</button></form></p>"; 
            }
            

            else{
                
                $jawab = intval($_POST['jawaban']);
                if ($hasil == $jawab){
                    echo "Hello ".$_COOKIE['nama'].", Selamat jawaban Anda benar...";
                    $_SESSION['score'] += 10;
                    echo "<br>Lives: <".$_SESSION['lives']."> | Score: <".$_SESSION['score'].">";
                    echo "<br><a href='game.php' class='btn btn-primary btn-sm'>Soal selanjutnya</a></h4>";
                    
                } else {
                    echo "Jawaban anda salah";
                    $_SESSION['lives'] -= 1;
                    $_SESSION['score'] -= 2;
                    echo "<br>Lives: <".$_SESSION['lives']."> | Score: <".$_SESSION['score'].">";
                    if($_SESSION['lives'] < 1){
                        ?>
                        <p style='color:red'>
                        <?php
                        echo "<br>Hello ".$_COOKIE['nama'].", sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.";
                        echo "<br><a href='game.php' class='btn btn-danger'>Restart</a></h4></p>";
                    } else {
                        echo "<br><a href='game.php' class='btn btn-primary'>Soal selanjutnya</a></h4>";
                    };
                }
                $_SESSION['angka1'] = rand(0,20);
                $_SESSION['angka2'] = rand(0,20);
            }
        }
        ?>
        
        </div>

        
    </body>
</html>