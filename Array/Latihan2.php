<?php

    $siswa = array(
        ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
        ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
        ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
        ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
    );
 
    foreach ($siswa as $value) {
        echo $value ['nama'] ;
        echo '<br>';
        echo $value ['kelas']." - ";
        echo $value ['jurusan'];
        echo '<br> <br>';
      } 
      
?>