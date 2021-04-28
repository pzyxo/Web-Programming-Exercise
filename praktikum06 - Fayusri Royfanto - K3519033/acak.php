<?php
if(!isset($_COOKIE['bilAcak'])){
    setcookie("bilAcak", rand(0, 100), time()+3*30*24*3600,"/");
    }
?>
