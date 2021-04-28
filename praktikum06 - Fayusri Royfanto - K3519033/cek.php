<?php

//mengecek keberadaan session 'namauser'
//ket: sesion 'namauuser' akan terbuat ketika proses login sukses
//silahkan cek kembali di script proses.php

if (!isset($_SESSION['namauser'])){
    echo "<p>Maaf anda tidak memiliki akses ke halaman ini</p>";
    echo "<p>Silahkan <a href=form.html>login</a> terlebih dahulu</p>";

    //setelah memunculkan pesan di atas, selanjutnya dibreak dengan exit()
    exit();
}

?>