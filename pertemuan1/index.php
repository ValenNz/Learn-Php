<?
// Ini adalah komentar
/**
 * 
 */

 /* */

 /** Output
  * echo, print
  * print_r ()
  * var_dump    : Memberikan iformasi ukuran tipe data dll (debbuging)
  */

  echo "Nuevalen Refitra Alswando";
  print_r ("Nuevalen Refitra Alswando");
  var_dump ("Nuevalen Refitra Alswando");

  /**   Penulisan sintaks php
   * Php didalam html
   * Html di dalam php
   */

    /** Variabel dan tipe data
     * variabel
     *      -   Varebel tidak boleh diawali dengan angka, tapi boleh mengandung angka
     */
    $nama = "valen";
    echo $nama;

    /** Operator aritmatika
    *   + - * / %
    */
    $x = 10;
    $y = 20;

    echo $x + $y;

    /** String
     *      Penggabung string / concat
     */
    $nama_depan = "Nuevalen";
    $nama_belakang = "Refitra";
    echo $nama_depan . " " . $nama_belakang;

    /** Assigment
     * =, +=, -=, *=, /=, %=, .=
     *
     * 
    */
    $x += 1;
    echo $x;

    $nama .= " ";
    $nama .= " Refitra";
    echo $nama;

    /** Perbandingan
     *  <,>,<=,>=,==
     */
    var_dump(1<5);
    var_dump ( 1 == "1");

    /** Identitas
     * ===, !==
     */
    var_dump(1 === "1");

    /** Logika
     * &&, ||, !
     */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Php</title>
</head>
<body>
    <h1>Halo Selamat Datang <?php echo "Valen"; ?></h1>

    <?php echo "<h1> Hello selamat datang sandhika </h1>" ?>
</body>
</html>