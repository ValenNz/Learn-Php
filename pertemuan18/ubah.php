<?php 

    session_start();

    /* Cek session */
    if ( !isset($_SESSION["login"])){
        header("Location: login.php");  // jika tidak ada session login tendang user ke login.php
    }

    /* Menghubungkan ke file functions.php */
    require 'functions.php';

    /* Ambil data di url */
    $id = $_GET["id"];
    

    /* Query data mahasiswa berdasarkan id */
    $pelajar = query("SELECT * FROM siswa WHERE id = $id")[0];


    /* Cek apakah tombol submit sudah dipencet atau belum */
    if (isset ($_POST["submit"])){

        /* Cek apakah data berhasil diubah atau tidak */
        if (ubah($_POST) > 0){
            /* cek fungsi unah dengan param POST maka akan di tangkap oleh $data. apakah function menangkap nilai lebih dari 0 maka jalankan program dibawah  */
            echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal diubah');
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
    <title>Ubah Data Siswa</title>
</head>
<body>
    <h1>Ubah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$pelajar["id"];?>">
        <input type="hidden" name="gambarLama" value="<?=$pelajar["gambar"];?>">

        <ul>
            <li>
                <label for="gambar">Gambar: </label>
                <!-- value : data akan secara otomatis terisi -->
                <img src="img/<?=$pelajar["gambar"]?>" width="40"> <br><br><br>
                <input type="file" name="gambar" id="gambar" >
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?=$pelajar["nama"]?>">
            </li>
            <li>
                <label for="nis">NIS: </label>
                <input type="text" name="nis" id="nis" value="<?=$pelajar["nis"]?>">
            </li>
            
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?=$pelajar["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" value="<?=$pelajar["jurusan"]?>">
            </li>
            <li >
                <button typle="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
<!-- required : untuk mewajibkan harus mengisi form -->