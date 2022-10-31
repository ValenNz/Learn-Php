<?php
    /* Koneksi ke databases */
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    /* Mengambil array di databases */
    function query($query){
        /* Menghubungkan database ke fungsi  */
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


    /* Tambah  */
    function tambah ($data){
        /* Menghubungkan database ke fungsi  */
        global $conn;
        /* Mengambil data dari tiap element dalam form */
        $nis = htmlspecialchars($data["nis"]); /* htmlspecialchars() : supaya user tidak bisa memasukan value html */
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        /* Query insert data (menambah)*/
        $query = "INSERT INTO siswa
        VALUES 
        ('','$nis','$nama','$email', '$jurusan','$gambar')";
        /* NOTE : urutan pada tabel field (tidak boleh ketukar) sesuai database */
        
        /* Insert data untuk menghubungkan ke database */
        mysqli_query($conn, $query);

        /* Mengembalikan angka dari function yang terhubung ke database */
        return mysqli_affected_rows($conn);
    }

    /* Hapus */
    function hapus($id){
        /* Menghubungkan database ke fungsi  */
        global $conn;
        /* Menghapus data
            conection database , hapus data siswa dari id yang dikirim
        */
        mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

        /* Mengembalikan nilai var yang terlah diisi array */
        return mysqli_affected_rows($conn);
    }
?>