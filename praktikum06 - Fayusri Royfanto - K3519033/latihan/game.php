<?php

include('cek.php');

echo "<center><h3>Hallo, ".$_COOKIE['namauser'].", nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h3></center>";
?>
<center>
<form method="get">
Bilangan Tebakan Anda : <input type="text" name="tebakan">
<input type="submit" name="submit" value="Submit">
</form>
</center>

<?php
$bilAcak = $_COOKIE['random'];
// echo "".$bilAcak."";
if(isset($_GET['tebakan'])){
    $nilaiTebak = $_GET['tebakan'];
    if ($nilaiTebak == $bilAcak){
        echo "<center>";
        echo "<p><h2>Yeay tebakan anda benar</h2></p>";
        setcookie("random", "", time()+3*30*24*3600,"/");
        setcookie("random", rand(0,100), time()+3*30*24*3600,"/");

        echo ("<a href='game.php'>Mulai lagi</a></center>");
    }else if ($nilaiTebak > $bilAcak){
        echo "<center><p><h2>Nilai tebakan anda terlalu besar :(</h2></p></center>";
    }else if ($nilaiTebak < $bilAcak){
        echo "<center><p><h2>Nilai tebakan anda terlalu kecil :(</h2></p></center>";
    }

    
}
echo ("<p><center><a href=logout.php>Log Out</a></center></p>");
?>