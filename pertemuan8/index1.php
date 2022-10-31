<?php
    /* Conect to function.php */
    require 'functions.php';

    /* Conect to tabel siswa */
    $siswa = query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
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
            <td><?= $i;?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <!-- Memanggil setiap element pada aray assosiatif -->
            <td><img src="img/<?= $row["gambar"];?>" width="50px"></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["nis"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
        <?php $i++;?>  <!-- id akan bertambah secara otomatis -->
        <?php endforeach;?>
    </table>
</body>
</html>