<?php
    /* Koneksi ke databases */
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    /* Mengambil array di databases */
    function query($query){
        /* Menghubungkan database ke fungsi  */
        global $conn;
        /* Koneksi ke database  */
        $result = mysqli_query($conn, $query);
        /* Membuat wadah untuk database */
        $rows = [];
        /* Melakukan perulangan ketiak row = hasil koneksi databs */
        while($row = mysqli_fetch_assoc($result)){
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
        $nis = htmlspecialchars($data["nis"]);
        /* htmlspecialchars() : supaya user tidak bisa memasukan value html */
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        /* Query insert data (menambah)*/
        $query = "INSERT INTO siswa
        VALUES
        ('','$nis','$nama','$email', '$jurusan','$gambar')
        ";
        /* NOTE : urutan pada tabel field (tidak boleh ketukar) sesuai database */
        
        /* Insert data untuk menghubungkan ke database */
        mysqli_query($conn, $query);

        /* Mengembalikan angka dari function yang sudah ditambah */
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
        /* Mengembalikan angka dari function yang sudah terhapus */
        return mysqli_affected_rows($conn);
    }

    /* Ubah */
    function ubah($data){ 
        /* Menghubungkan database ke fungsi  */
        global $conn;

        /* Mengambil data dari tiap element dalam form */
        $id = $data["id"];
        $nis = htmlspecialchars($data["nis"]);
        /* htmlspecialchars() : supaya user tidak bisa memasukan value html */
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);
        
        /* Query update data */        
        $query = "UPDATE siswa SET 
                  nis = '$nis',
                  nama = '$nama',
                  email = '$email',
                  jurusan = '$jurusan',
                  gambar = '$gambar',
                  WHERE id = $id
                ";
                /* NOTE : urutan pada tabel field (tidak boleh ketukar) sesuai database . ganti $nis jadi nis baru (ditimpa)*/

        /* Update data untuk menghubungkan ke database (jalankan query)*/
        mysqli_query($conn, $query);

        /* Mengembalikan angka dari function yang sudah terupdate */
        return mysqli_affected_rows($conn);
    }

    /* CARI */
    function cari ($keyword){ /* param : Menangkap keyword */
        $query = "SELECT * FROM siswa 
                  WHERE
                  nama LIKE '%$keyword%' OR
                  nis LIKE '%$keyword%' OR
                  email LIKE '%$keyword%' OR
                  jurusan LIKE '%$keyword%'
                  ";
                  /* 
                  LIKE : apapun ketika keyword dimasukan ditampilkan
                  % : mencari depan belakang
                   */
    
        /* manggil function yang telah kita buat ke function baru */
        return query($query);
    }
?>