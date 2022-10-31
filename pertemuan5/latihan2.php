<!-- Array Assosiatif 
        -   keynya adalah string yang kita buat sendiri
-->


<?php
    $siswa= [
        [
            "nama" => "Nuevalen", 
            "nis" => "05110532", 
            "jurusan" => "RPL", 
            "email" => "nuevalera5@gmail.com",
            "gambar" => "foto1.jpg"
            // "nilai" => [90,86,76]
        ],
        [
            "nama" => "Recha", 
            "nis" => "03030535", 
            "jurusan" =>"Statiska", 
            "email" =>"recha3@gmail.com",
            "gambar" => "foto2.jpg"
            // "nilai" => [80,86,73]
        ],
        [
            "nama" => "Chita", 
            "nis" => "08031308", 
            "jurusan" => "Kedokteran", 
            "email" => "chiquittita8@gmail.com",
            "gambar" => "foto3.jpg"
            // "nilai" => [78,96,86]
        ]
    ];

    echo $siswa[1]["email"];
    echo"<br>";
    // echo $siswa[1]["nilai"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>

    <style>
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php foreach ($siswa as $pelajar) :?>
        <!-- Setiap elemen array siswa diperumpamakan pelajar -->
        <ul>
            <!-- memanggil key(string)/index disetiap array -->
            <li>
                <img src="img/<?= $pelajar["gambar"];?>">
            </li>
            <li>Nama : <?= $pelajar["nama"]; ?></li> 
            <li>NIS : <?= $pelajar["nis"]; ?></li>
            <li>Jurusan : <?= $pelajar["jurusan"]; ?></li>
            <li>Email : <?= $pelajar["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>