<?php

function hitungDenda($tglHarusKembali, $tglKembali){
    $pecah1 = explode("-", $tglHarusKembali);
    $date1 = $pecah1[2];
    $month1 = $pecah1[1];
    $year1 = $pecah1[0];

    $pecah2 = explode("-", $tglKembali);
    $date2 = $pecah2[2];
    $month2 = $pecah2[1];
    $year2 = $pecah2[0];

    $data1 = gregoriantojd($month1, $date1, $year1);
    $data2 = gregoriantojd($month2, $date2, $year2);

    $selisih = $data2 - $data1;

    $denda = $selisih * 3000;

    return $denda;
}

echo "Besarnya denda adalah: Rp. ".hitungDenda("2021-01-03", "2021-01-05");

?>