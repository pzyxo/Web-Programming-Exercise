<?php

//membuka file
$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "a") or die("File tidak bisa dibuka!");
// end of membuka file

//membaca input
$nim1 = $_POST['nim'];
$nama1 = $_POST['nama'];
$tgllahir1 = $_POST['tgllahir'];
$tmplahir1 = $_POST['tmptlhr'];
// end of membaca input

fwrite($myFile, "\n".$nim1."|".$nama1."|".$tgllahir1."|".$tmplahir1."");
fclose($myFile);

echo "Data telah ditambahkan";
?>