<?php
    /* Membuat function 
     
    function nama(param){
        return : mengembalikan nilai/hasil output
    } 

    */
    function salam($waktu, $nama){
        return "Selamat $waktu, $nama";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi from User</title>
</head>
<body>
    <!-- Memanggil function -->
    <h1><?= salam("pagi","Valen"); ?></h1> 
</body>
</html>


<!-- Note
    -   Jika tidak mengirim para atau nilai apapaun aaka yang dikirim akan nilai default.
-->