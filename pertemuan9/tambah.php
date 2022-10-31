<?php 

/* Menghubungkan ke file functions.php + memanggil fungsi tambah */
require 'functions.php';

    /* Cek apakah tombol submit sudah dipencet atau belum */
    if (isset ($_POST["submit"])){

        /* Cek apakah data berhasil ditambahkan atau tidak */
        if (tambah($_POST) > 0){ /* cek fungsi tambah dengan param POST maka akan di tangkap oleh $data. apakah function menangkap nilai lebih dari 0 maka jalankan program dibawah  */
            echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
            ";
        }  
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" required>
                <!-- required : atribute untuk mewajibkan kita mengisi form  -->
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nis">NIS: </label>
                <input type="text" name="nis" id="nis" required>
            </li>
            
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li >
                <button typle="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>