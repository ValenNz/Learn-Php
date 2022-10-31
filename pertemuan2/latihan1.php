<?php
    /* for */
    /* for(inisialisai; kondisi(ingin perulangan berapa kali); variabel akan ditambah) */
    for ($i = 0; $i < 5; $i++){ // var dimulai dari 0 jika i < 5 maka i akan menambah terus sampai 5.
        echo "For loop <br>";
    }

    /* While */
    /* while(kondisi){ -> selama kondisi bernilai true maka eksekusi kode block
    } 
    */
    $i = 0;
    while ($i < 5){
        echo "While Loop <br>";
        $i++;
    }

    /* Do while */
    /* do{
        kode block  -> jalankan dulu kode block
    } while(kondisi) -> lau cek kondisinya
    */

    $x = 10;
    do {
        echo "do While <br>";
        $x++;
    } while ( $x < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border="1" cellpadding = "10" cellspacing="0">
        <?php for( $i = 1; $i <= 3; $i++) : ?> <!-- Membuart baris -->
                <tr>
                    <?php for($j = 1; $j <=5; $j++) : ?> <!-- Membuat kolom-->
                        <td> <?= "$i, $j"; ?> </td> <!-- Mengulang output -->
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>