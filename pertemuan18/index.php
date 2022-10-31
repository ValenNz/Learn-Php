<?php

    /* menjalankan session */
    session_start();

    /* Cek session */
    if ( !isset($_SESSION["login"])){
        /* jika tidak ada login maka tendang user */
        header("Location: login.php");  // jika tidak ada session login tendang user ke login.php
    }

    /* Conect to function.php */
    require 'functions.php';

    $siswa = query("SELECT * FROM siswa");

    /* 
    ORDERED BY id DESC : mengurutkan dari yang terbaru
    ORDERED BY id ASC : mengurutkan dari yang lama
    
    /* Tombol cari di klik  */
    if ( isset($_POST["cari"])){
        $siswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

    <!-- tombol logout -->
    <a href="logout.php">Logout</a>
    <h1>Daftar mahasiswa</h1>
    <a href="tambah.php">Tambah Data Siswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencari an.." autocomplate="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Search!</button>
    </form>
    <br>
    
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <!-- Mengganti setiap id secara otomatis -->
            <?php $i = 1; ?>
            <?php foreach( $siswa as $row) : ?>
            <tr>
                <!-- Output index -->
                <td><?= $i;?></td>
                <td>
                    <!-- Menguhubungkan ke class ubah (mengirim data menggunakan id)-->
                    <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>
                    <!-- Menghubungkan ke class hapus (mengirim data menggunakan id)-->
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Afa iya??')">hapus</a>
                </td>
                <!-- Memanggil setiap element pada aray assosiatif -->
                <td><img src="img/<?= $row["gambar"];?>" width="50px"></td>
                <td><?= $row["nama"];?></td>
                <td><?= $row["nis"];?></td>
                <td><?= $row["email"];?></td>
                <td><?= $row["jurusan"];?></td>
            </tr>
            <!-- id akan bertambah secara otomatis -->
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </div>

    <!-- JS -->
    <script src="js/script.js"></script>

</body>
</html>