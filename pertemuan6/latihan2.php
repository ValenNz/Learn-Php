<?php
    /* Cek apakah tidak ada data di $_GET */
    /* isset () digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum */
    if( !isset($_GET["gambar"]) ||
        !isset($_GET["nama"]) ||
        !isset($_GET["nis"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["email"]) ){
            // redirect : Melempar ke halaman tetap
            header("Location: latihan1.php");
            exit;
        /* Jika gambar, nama, nis, jurusan, email belum di set paksa user pindah */
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <ul>
        <!-- Menangkap Data dari URL -->
        <li><img src="img/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nis"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">Back</a>
</body>
</html>