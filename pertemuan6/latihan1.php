<!-- $_GET 
    -   Mengirim data di url
 -->
<?php
    /* Membuat array assosiatif */
     $siswa= [
        [
            "nama" => "Nuevalen", 
            "nis" => "05110532", 
            "jurusan" => "RPL", 
            "email" => "nuevalera5@gmail.com",
            "gambar" => "foto1.jpg"
        ],
        [
            "nama" => "Recha", 
            "nis" => "03030535", 
            "jurusan" =>"Statiska", 
            "email" =>"recha3@gmail.com",
            "gambar" => "foto2.jpg"
        ],
        [
            "nama" => "Chita", 
            "nis" => "08031308", 
            "jurusan" => "Kedokteran", 
            "email" => "chiquittita8@gmail.com",
            "gambar" => "foto3.jpg"
        ]
     ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    
</head>
<body>
<h1>Daftar Siswa</h1>
    <ul>
        <?php foreach ($siswa as $pelajar) :?>
            <!-- Array siswa diperumpamakan pelajar-->
            <li>
                <!-- Mengirim data dari url -->
                <a href="latihan2.php?gambar=<?=$pelajar["gambar"]; ?>&nama=<?=$pelajar["nama"]; ?>&nis=<?=$pelajar["nis"]; ?>&jurusan=<?=$pelajar["jurusan"]; ?>&email=<?=$pelajar["email"]; ?>"><?= $pelajar["nama"]; ?></a> 
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
