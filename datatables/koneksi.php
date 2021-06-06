<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'pertemuan13';
$koneksi = mysqli_connect($host, $username, $pass, $db) or die ("koneksi gagal" .mysqli_connect_error());
if(mysqli_connect_errno()){
	exit();
}

?>