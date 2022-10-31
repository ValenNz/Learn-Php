<?php
    /* Function from PHP */

    /* Date */
    echo date("l , d-M-Y");

    /** Time 
    *   UNIX Timestamp / EPOCH time
    *   Detik yang sudah berlalu sejak 1 january 1970
    */
    // echo time("");
    echo date("l", time()-60*60*24*100);

    /** mktime
     *  Membuat sendiri detik
     *  mktime(0,0,0,0,0,0)
     * jam, menit, detik, bulan, tanggal, tahun
     */
    echo date("l, mktime(0,0,0,11,5,2005");

    /** strtotime
     *  Untuk mengetauhi hari
     */
    echo date("l", strtotime("5 nov 2005"));

   /** String
   *    strlen()    : Menghitung panjang string
   *    strcmp()    : Menggabungkan 2 buah string
   *    explode()   : Memecah string sebuah string menjadi array
   *    htmlspecialchars () : cek type html
   */

   /**  Utility
    *   var_dump()  : Mencetak sebuah var
    *   isset()     : apakah sebuah var sudah pernah di isi atau belum
    *   empty()     : Cek apakah var kosong atau tidak
    *   die()       : Memberhentikan program
    *   sleep()     : Memberhentikan sementara
    */
?>