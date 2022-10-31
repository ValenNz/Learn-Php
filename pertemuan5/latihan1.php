<?php
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>

    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50px;
        }
        
        .clear {
            clear : both;
        }
    </style>
</head>
<body>
    <!-- Arary Biasa -->
    <?php 
        $angka = [1,2,3,4,5,6,7,8,9];
    ?>

    <?php foreach ($angka as $a) : ?>
        <!-- Setiaap elemen pada array angka akan diimplementasikan sebagai variabel a -->
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach;?>



    <!-- Array Multidimensi -->
    <div class="clear"></div>
    <?php 
        $angka1 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
        // echo $angka1[1][1];
        // echo $angka1[2][2];
    ?>
    
    <?php foreach ($angka1 as $a) : ?> <!-- angka merupakan rak buku -> a merupakan boxfile  -->
        <?php foreach ($a as $b) :?>
            <!-- a : boxfile -> b : buku  -->
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach;?>
        <div class="clear"></div> <!-- enter perulanagan -->
    <?php endforeach;?>


</body>
</html>