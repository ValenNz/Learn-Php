<?php
   /* Menghubungkan database dengan fungsi  */
   require 'function.php';

    /* Ambil data dari tabel siswa / query data siswa 
    * mysqli_query($connection, ambilSemuaisiTabel) */
    $result= mysqli_query($conn, "SELECT * FROM siswa");

    /** Ambil data (fetch) siswa dari object result
     * mysqli_fetch_row()   : Mengembalikan array numeric
     * mysqli_fetch_assoc() : Mengembalikan array assosiatif
     * mysqli_fetch_array() : Mengembalikan array assosiatif dan numeric
     * mysqli_fetch_object(): Mengembalikan object
     */

    // $pelajar = mysqli_fetch_row($result);
    // var_dump($pelajar[2]);
    // while ($pelajar = mysqli_fetch_assoc($result)){
    //     var_dump($pelajar["jurusan"]);
    // }
    // $pelajar = mysqli_fetch_array($result);
    // var_dump($pelajar["jurusan"]);
    // $pelajar = mysqli_fetch_object($result);
    // var_dump($pelajar ->jurusan);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <?php foreach ($siswa as $row): ?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
             <!-- Memanggil setiap element pada aray assosiatif -->
            <td><img src="img/<?= $row["gambar"];?>" width="50px"></td>
            <td><?= $row["nama_siswa"];?></td>
            <td><?= $row["nis"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
        <?php $i++;?> <!-- id akan bertambah secara otomatis -->  
        <?php endforeach;?>
    </table>
</body>
</html>