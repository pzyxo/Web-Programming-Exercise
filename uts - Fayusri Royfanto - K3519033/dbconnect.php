<?php


function insertData ($dbhost, $dbusername, $dbpassword, $dbname, $dbtable, $dbport, $nama, $skor){
    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname, $dbport);
    $query = "INSERT INTO $dbtable (nama, skor) VALUES ('$nama', '$skor')";
    if (mysqli_query($conn, $query)){
        echo "<script>console.log('Data berhasil direkam');</script>";
    } else {
        $err = mysqli_error($conn);
        die("<script>console.log('Data gagal direkam : '.{$err});</script>");
    }

    mysqli_close($conn);
}

function leaderboard ($dbhost, $dbusername, $dbpassword, $dbname, $dbtable, $dbport){
    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname, $dbport);
    $query = "SELECT * FROM {$dbtable} ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $search = mysqli_query($conn, $query);
    if (mysqli_num_rows($search) > 0) {

        ?>
        
        <table border='2' class="table table-dark table-bordered border-light caption-top">
        <caption style='text-align:center;color:white'><h1>Top 10 Leaderboard</h1></caption>
        <tr class='table-light'>
        <th>No.</th>
        <th>Nama Player</th>
        <th>Score</th>
        </tr>
    
        <?php
        while($row = mysqli_fetch_assoc($search)){
            echo"<tr>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index++;
        }
    
        
        ?>
        
        </table>
        <?php
    }
    mysqli_close($conn);
}

?>