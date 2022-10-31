<?php

/* Memanggil function.php */
require 'functions.php';

/* Jalankan session */
session_start();

    /* Cek Cookie */
    if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        /* Ambil id dan key */
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        /* Ambil username berdasarkan id */
        $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
        /* kita ambil array dari hasil */
        $row = mysqli_fetch_assoc($result);

        /* Cek cookue dan username */
        if ($key === hash('sha256', $row['username'])){
            /* jika benar boleh login */
            $_SESSION['login'] = true;
        }
    }


    /* Cek Session */
    if ( isset($_SESSION["login"])){
        /* Tendang ke index  */
        header("Location: index.php");
        exit;
    }


    /* Cek apakah tombol login sudah ditekan atau belum  */
    if(isset($_POST["login"])){
        /* Menangkap data username dan password dari POST */
        $username = $_POST["username"];
        $password = $_POST["password"];

        /* Cek apakah ada username ditabase dengan username yang diinoutkan */
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

        /* Cek username */
        if(mysqli_num_rows($result) === 1 ){
            /* 
            mysqli_num_row : ada berapa baris dari fungsi SELECT. jika hasil = 1 cek password dibawah
            */

            /* Cek Password */
            /* Mengambil isi database */
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row["password"])){
                /* 
                password_veivy : cek sebuah string sama atau tidak dengan hash (StringBelumAcak, StringSudahAcak) 
                */

                /* Set session  */
                /* supaya user tidak dapat ke halaman lain sebelum login */
                $_SESSION["login"] = true; // jika berhasil login = true maka kita session dulu

                /* Cek rememmber me */
                if ( isset($_POST['remember'])){
                    /* Buat Cookie */
                    setcookie('id', $row['id'], time()+60);
                    /* Mengambil id di tabel user */

                    /* Enksripsi cookie */
                    setcookie('key', hash('sha256',$row['username']), time()+60);
                    /* has enksripsi */
                }

                /* Jiak seleksi benar lempar ke index.php */
                header("Location: index.php");
                /* Memberhentikan script */
                exit;
            }
        }
        /* jika tidak sama dengan database */
        $error = true;
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

    <h1>Halaman Login</h1>

    <!-- Cek kesalahan -->
    <?php if(isset($error)) :?>
        <p style="color: red; font-style: italic">username / password salah</p>
    <?php endif; ?> 


    <form action="" method="post">
        <!--
             Action kosong supaya kembali kehalam ini
             post : untuk mengirim tidak melalui url
        -->
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>