
Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!

<form method="post">
Bilangan Tebakan Anda : <input type="text" name="tebakan">
<input type="submit" name="submit" value="Submit">
</form>

<?php

$bilAcak = $_COOKIE['$bilAcak'];

if(isset($_POST['tebakan'])){
    $nilaiTebak = $_POST['tebakan'];
    if ($nilaiTebak == $bilAcak){
        echo "yeay nilai anda benar";
    }
}

