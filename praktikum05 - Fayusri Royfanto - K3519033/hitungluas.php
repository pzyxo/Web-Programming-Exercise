<?php

$phi = 22/7;
$nama = $_GET['n'];
$diameter = $_GET['d'];
$tinggi = $_GET['t'];
$lSelimut = ($phi * $diameter) * $tinggi;
$lLingkaran = ($phi * ($diameter ** 2)) / 4;
$lTabung = round($lSelimut + $lLingkaran, 2);

echo ("Luas tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $lTabung satuan luas");
?>