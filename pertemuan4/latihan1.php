<!-- Array 
    -   Sebauh variabel yng dapat menyimpan lebih dari satu nilai
    -   Element pada array boleh beda
    -   Pasangan antara key dan value kenya adalah index yang dimuali dari 0
-->

<?php
    /* Membuat Array */
    $hari = array("senin","selasa","Rabu");
    $bulan = ["January", "February", "Maret"];
    $arr1 = [123, "tulisan", false];

    /* Menampilkan array */
    var_dump($bulan);
    echo"<br>";
    print_r($bulan);
    echo"<br>";

    /* Menampilkan 1 elements */
    echo $arr1[0];

    /* Menambahkan Elemen */
    var_dump($hari);
    $hari[] = "Kamis";
    echo"<br>";
    var_dump($hari);



?>


