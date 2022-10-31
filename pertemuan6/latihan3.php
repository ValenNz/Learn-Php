<!-- $_POST mengirim tidak mealui p -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
</head>
<body>
    <!-- Cek apakah tombol subit pernah ditekan atau tidak -->
    <?php
        if( isset($_POST["submit"])) : ?>
            <!-- Jika tombol submit sudah ditekan maka outputkan kondisi -->
            <h1>Halo, Selamat datang <?= $_POST["nama"];?></h1>
    <?php endif; ?>


    <form action="" method="post">
        Masukan Nama
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<!-- Note
    -   Jika action (data) dikosongkan maka akan dikirim ke halaman sendiri
-->