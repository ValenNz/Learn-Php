<?php
    session_start();

    /* Cek session */
    if ( !isset($_SESSION["login"])){
        header("Location: login.php");  // jika tidak ada session login tendang user ke login.php
    }
    
    /* Menghubungkan ke file functions.php */
    require 'functions.php';
     /* Menangkap id dari url yang dikirimkan */
    /* Menangkap id dari url yang dikirimkan */
    $id = $_GET["id"];

    /* Mengirim id ke function jika id > 0 maka jalankan program dibawah  */
    if (hapus($id) > 0){
        echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal digapus');
            document.location.href = 'index.php';
        </script>
        ";
    }


?>