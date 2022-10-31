<?php
    /* Conect to fnction.php */
    require 'functions.php';

    
    /* Conect to tabel siswa */
    $siswa = query("SELECT * FROM siswa");

    /* 
    ORDERED BY id DESC : mengurutkan dari yang terbaru
    ORDERED BY id ASC : mengurutkan dari yang lama
    
    /* Tombol cari di klik  */
    if ( isset($_POST["cari"])){
        /* kita cari siswa berdasarkan keyword yang dimasukan ketika diketik masukan ke function cari */
        $siswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <a href="tambah.php">Tambah Data Siswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarioan.." autocomplate="off">
        <button type="submit" name="cari">Search!</button>
    </form>
    <br>
    
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
</body>
</html>