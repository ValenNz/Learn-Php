<?php
    /* Koneksi ke databases */
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    /* Mengambil array di databases */
    function query($query){
        /* Memanggil koneksi database */
        global $conn;
        $result = mysqli_query($conn, $query);
        /* Membuat wadah untuk database */
        $rows = [];
        /* Melakukan perulangan ketiak row = hasil koneksi databs */
        while($row = mysqli_fetch_assoc($result)){
            /* Menambahkan elemen baru ditiap array */
            $rows[] = $row;
        }
        /* Mengembalikan nilai var yang terlah diisi array */
        return $rows;
    }
?>