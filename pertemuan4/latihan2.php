<!-- For array -->

<?php
    $angka = [3,45,5,67,8,32];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color : salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear : both;
        }
    </style>

</head>
<body>
    <!-- Menggubnakan For -->
    <?php for ($i = 0; $i < count($angka); $i++){ ?>
        <div class="kotak"><?php echo $angka[$i];?></div>
    <?php } ?>

    <div class="clear"></div>


    <!-- Menggunakan Forech -->
    <?php foreach($angka as $a ) { ?>
        <!-- Setiap elemen pada array angka jadikan a (elemen1 -> a, elemen2 -> a) -->
        <div class="kotak"><?php echo $a;?></div>
    <?php }?>

    <div class="clear"></div>

    <?php foreach($angka as $a) :?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach?>
</body>
</html>

<!-- Note
        FOR
        -   count() : menghitung jumlah element pada array

        FOREACH
        -   as      : Menyimpan sebuah array ke var jamak - > singulalr (books -> book)
-->