<?php
    /* Cek apakah tombol submit sudah di tekan atau belum */
    if (isset($_POST["submit"])){
        /* Cek username dan password */
        if ($_POST["username"]=="admin" && $_POST["password"]=="123"){
            /* Jika benar, redirect ke halaman admin */
            header("Location: admin.php");
            exit;
        } else{
            /* Jika salah, tampilkan pesan kesalahan */
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <!-- jika erreo maka akan menampilkan kondisi di bawah -->
    <?php if (isset ($error)) :?>
        <p style="color: red; font-style: italic;">Username / Password salah!</p>
    <?php endif;?>

    <ul>
        <form action="" method="post">
            <!-- Acton kosong supaya kembali ke halaman ini method: post supaya password tidak diketahui orang lain -->
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>