<?php

    $angka = 1;
    switch ($angka){
        case 1 :
            "Isi variabel angka adalah 1";
            break;
        case 2 :
            "Isi variabel angka adalah 2";
            break;
        case 3 :
            "Isi variabel angka adalah 2";
            break;
    }
    $tgl=date('l');
    echo date('l,d F Y ', strtotime('2021-01-23')), "<br>";
    switch($tgl){
        case 'Monday'; echo 'Senin' ; break;
        case 'Tuesday'; echo 'Selasa' ; break;
        case 'Wednesday'; echo 'Rabu' ; break;
        case 'Thursday'; echo 'Kamis' ; break;
        case 'Friday'; echo 'Jumat' ; break;
    }
?>