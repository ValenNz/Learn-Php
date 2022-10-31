<?php
    function tampilakan_nama(){
        echo "nama saya neuvalen";
    }
    tampilakan_nama();

    function kali(){
        $a = 2;
        $b = 10;
        $c = $a * $b;
        return $c;
    }
    kali();


    function jumlah($a,$b){
        $c = $a + $b;
        return $c;
    }
    echo jumlah(2,6);
?>  