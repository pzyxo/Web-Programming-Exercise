<?php

//membuka file
$namaFile = "datatabung.dat";
$myFile = fopen($namaFile, "r") or die("File tidak bisa dibuka!");
//end of membuka file

echo "<h2>DATA UKURAN TABUNG</h2>";
//tabel
echo "<table border='1'>";
echo("<tr>
        <th>NAMA TABUNG</th>
        <th>DIAMETER</th>
        <th>TINGGI</th>
        <th>LUAS</th>
    </tr>");
//loop tabel dan isi
while (!feof($myFile)){
    echo("<tr>");
    $dataTabung = explode(",", fgets($myFile));
    //hyperlink file hitungluas.php
    $link = "http://localhost/phpTugas/praktikum05%20-%20Fayusri%20Royfanto%20-%20K3519033/hitungluas.php?n=$dataTabung[0]&d=$dataTabung[1]&t=$dataTabung[2]";
    echo("
        <td>$dataTabung[0]</td>
        <td>$dataTabung[1]</td>
        <td>$dataTabung[2]</td>
        <td><a href=$link target='_blank'>view</a></td>
        ");
    echo("</tr>");
};
//end of loop tabel dan isi
echo("</table>");
//end of tabel

fclose($myFile);
?>

