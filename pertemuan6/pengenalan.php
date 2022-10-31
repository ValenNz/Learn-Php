<!-- Variable scope -->

<?php 
    /* Deklarasi var  */
    $x = 10;
    /* Print Var */
    echo $x;

    echo "<br>";
    function tampilx(){
        global $x;  // Variabel global / semua
        // $x = 20;    // Variabel local
        echo $x;
    }

    tampilx();
    echo "<br>";
?>

<!-- Variabel Superglobal 
    -   $_GET
    -   $_POST
    -   $_REQUEST
    -   $_SESSION
    -   $_COOKIE
    -   $_SERVER
    -   $_ENV
-->
<?php 
    var_dump($_GET);
    echo "<br>";
    var_dump($_POST);
    echo "<br>";
    // var_dump($_SERVER);
?>
