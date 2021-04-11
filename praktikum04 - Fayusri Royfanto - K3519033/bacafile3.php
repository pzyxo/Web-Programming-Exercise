<?php
$namaFile = "myfile.txt";
$myfile = fopen($namaFile, "a") or die("File tidak bisa dibuka!");
fwrite($myfile, "DOS = Disk Operating System\n");
fclose($myfile);
?>