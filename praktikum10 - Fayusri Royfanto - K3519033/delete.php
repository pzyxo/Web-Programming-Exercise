<?php
// include database
include_once("dbconnect.php");
// Mengambil ID
$id = $row['id_karyawan'];
// Menghapus baris data dengan ID yang berkesesuaian
$result = mysqli_query($mysqli, "DELETE FROM `data_karyawan` WHERE `data_karyawan`.id_karyawan = '$id'");
// Redirect kembali ke halaman utama
location("index.php");
?>