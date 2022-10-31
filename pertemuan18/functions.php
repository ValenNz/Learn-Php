<?php
    /* Koneksi ke databases */
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    /* Mengambil array di databases */
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

        /* Upload gambar */
        $gambar = upload();
        if( !$gambar ){
            return false;
        }


        /* Query insert data */
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

    /* Upload */
    function upload(){
        /* Cek apakah tidak ada gambar yang diuploaf */
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        /* Cek apakah tidak ada gambar yang diuploaf */
        if($error === 4){
            /* 4 : tidak ada yang diupload */
            echo "<script>
                    alert('pilih gambar terlebiih dahulu!');
                  </script>";
                /* Memberi tahu fungsi upload gagl maka fungsi tambah gagal */
            return false;
        }

        /* Cek apakah gambar atau gambar */
        $ekstensiGambarValid = ['jpg','jpeg','png'];

        $ekstensiGambar = explode('.', $namaFile);
        /* ecplode memecah string menjadi array menggunakan delimiter  
            valen.jpg = ['valen','jpg]
        */
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        /* valen.refi.jpg : end() : fungsi mengambol terakhir 
            valen.refi.JPG : strlower : convert ke tulisan kecil    
        */

        /* Apakah ekstensi ada */
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            /* in_array : Cek apakah ada seebuah string didalam array (jarum,jerami) */
            echo "<script>
                    alert('yang anda upload bukan gambar');
                  </script>";
                  /* Memberi tahu fungsi upload gagl maka fungsi tambah gagal */
            return false;
            
        }

        /* Cek ukuranya terlalu besar  */
        if ( $ukuranFile > 500000000000000000000000){
            echo "<script>
                        alert('ukuran terlalu besar!');
                 </script>";
                 /* Memberi tahu fungsi upload gagl maka fungsi tambah gagal */
                 return false;
        }

        /* Lolos pengecekan gambar siap diupload */ 
        /* generate nama gambar baru */
        $namaFileBaru  = uniqid(); /* uniqid : membagkitkan string random angka yang menjadi nama angkanya*/
        $namaFileBaru .= '.'; /*menggabungkan dengan ekstensi filenya */
        $namaFileBaru .= $ekstensiGambar;

        /* Upload file yang diupload ke tempat tujuan */
        move_uploaded_file($tmpName,'img/'.$namaFileBaru);

        /* Mengembalikan upload yang telah di upload  */
        return $namaFileBaru;

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
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        /* Apakah user pilih gambar baru atau tidak */
        if( $_FILES['gambar']['error']===4){
            $gambar = $gambarLama;
        } else {
            $gambar = upload();

        }

        
        /* Query update data */        
        $query = "UPDATE siswa SET 
                  nis = '$nis',
                  nama = '$nama',
                  email = '$email',
                  jurusan = '$jurusan',
                  gambar = '$gambar'
                  WHERE id = $id
                ";
                /* NOTE : urutan pada tabel field (tidak boleh ketukar) sesuai database . ganti $nis jadi nis baru (ditimpa)*/

        /* Update data untuk menghubungkan ke database (jalankan query)*/
        mysqli_query($conn, $query);

        /* Mengembalikan angka dari function yang sudah terupdate */
        return mysqli_affected_rows($conn);
    }

    /* CARI */
    function cari ($keyword){
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




    /* Regristasi */
    function registrasi($data){
        /* Menghubungkan database ke fungsi  */
        global $conn;

        /* Mengambil ambil data dari $_POST diambil dari $data masukan ke $username */
        $username = strtolower(stripslashes($data["username"]));
        /* 
           stripslashes : menghapus slas
           strtolower   : merubah huruf besar ke kecil
        */
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        /* 
            mysqli_real_escape_string() : Memungkinakan user bisa memasukan tanda kutip 
        */

        /* Cek username sudah adda atau belum */
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if( mysqli_fetch_assoc($result)){
            /* Jiak fungsi ini menghasilkan true  maka output kan ini*/
            echo "<script>
                alert('username sudah terdaftar!')
                </script>";
                /* Memberi tahu fungsi refristasi gagal maka script akan  gagal */
                return false;
        }



        /* cek konfirmasi password */
        if($password !== $password2){
            echo "<script>
                    alert('konfirmasi password tidak sesuai');
                  </script>";
                  return false;
        }

        /* enkripsi password */
        $password = password_hash($password, PASSWORD_DEFAULT);
        /* password_hash($passwordApayangMaudiacak, pengacaknya pakai algoritma apa ) */

        /* tambahkan userbaru ke databases */

        /* tambahkan userbaru ke databases */
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        /* mengembalikan angka $conn */
        return mysqli_affected_rows($conn);
    }
?>