<?php
    $x = 10;
    if ($x < 20){
        echo "benar";
    } else if ($x == 20){
        echo "bingo";
    } else {
        echo "salah";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <style> 
        .warna-baris {
            background-color : yellow;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding = "10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++) : ?> <!-- Membuart baris -->
            <?php if ( $i % 2 ==1) :?>  <!-- jika var sesuai kondisi maka beri warna pada background-->
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                    <?php for($j = 1; $j <=5; $j++) : ?> <!-- Membuart kolom -->
                        <td> <?= "$i, $j"; ?> </td> <!-- Mengulang output -->
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>