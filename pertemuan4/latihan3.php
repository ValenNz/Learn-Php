<?php
    $siswa= [
        ["Nuevalen", "05110532", "RPL", "nuevalera5@gmail.com"],
        ["Recha", "03030535", "Statiska", "recha3@gmail.com"],
        ["Chita", "08031308", "Kedokteran", "chiquittita8@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php foreach ($siswa as $pelajar) :?>
        <!-- 
            Setiap siswa dijadikan pelajar
            array siswa meiliki nama nuevalen, recha, chita mkaa naam tersebut diperumpakana menjadi pelajar
         -->
        <ul>
            <!-- Memanggil setiap elemen pada  array dengan index -->
            <li>Nama : <?= $pelajar[0]; ?></li>
            <li>NIS : <?= $pelajar[1]; ?></li>
            <li>Jurusan : <?= $pelajar[2]; ?></li>
            <li>Email : <?= $pelajar[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>