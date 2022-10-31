<?php
    $nilai = 0;
    if($nilai > 90){
        echo"A+";
    } elseif ($nilai > 80 && $nilai <= 90 ){
        echo"A";
    } elseif ($nilai > 70 && $nilai <= 80 ){
        echo"B+";
    } elseif ($nilai > 60 && $nilai <= 70 ){
        echo"B";
    } elseif ($nilai > 50 && $nilai <= 60 ){
        echo"C+";
    } elseif ($nilai > 40 && $nilai <= 50 ){
        echo"C";
    } elseif ($nilai > 30 && $nilai <= 40 ){
        echo"D";
    } else {
        echo"E";
    }
?>