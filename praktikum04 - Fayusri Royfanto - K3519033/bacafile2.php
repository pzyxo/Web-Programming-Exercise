<?php
$namaFile = "myfile.txt";
$myfile = fopen($namaFile, "r") or die("File tidak bisa dibuka!");
while(!feof($myfile)){
    echo fgets($myfile);
}
fclose($myfile);
?>