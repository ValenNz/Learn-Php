<?php
    $data = array ("Apple","Anggur","Jeruk");
    echo $data[1];
    echo "<br>";

    $data[] = "Apple";
    $data[] = "Anggur";
    $data[] = "Jeruk";
    print_r($data);
    echo "<br>";
    print_r($data[1]);
    echo "<br>";


    $data= [    
        "id" => 1,
        "nama" => "mobil",
        "jenis" => "kendaraan"
    ];

    echo $data['nama'];

    $siswa [0] ['id'] = 1;
    $siswa [0] ['nama'] = "Valen";
    $siswa [0] ['kelas'] = "XIR5";

    $siswa [1] ['id'] = 2;
    $siswa [1] ['nama'] = "Budi";
    $siswa [1] ['kelas'] = "XIR5";

    $siswa [2] ['id'] = 1;
    $siswa [2] ['nama'] = "Joko";
    $siswa [2] ['kelas'] = "XIR5";




    echo"<br><br><br><br>";
    $kelas=[
        ["id" => "XR1","namaKelas"=> "XRPL1"],
        ["id" => "XR2","namaKelas"=> "XRPL2"],
        ["id" => "XR3","namaKelas"=> "XRPL3"]
    ];

    echo'<table border= "1" cellspacing="0" cellpadding="25px">';
        echo '<tr>';
        echo '<th> id </th><th>Kelas</th>';
        echo '<tr>';

        foreach($kelas as $K_Kelas => $V_Kelas){
            echo $K_Kelas." ".$V_Kelas['id']." ";
            echo'<tr>';
                echo'<td>'.$V_Kelas['id'].'</td>';
                echo'<td>'.$V_Kelas['namaKelas'].'</td>';
            echo'</tr>';
        }
    echo'</table>';

    
    //    $ kelas : array
    //    $K_Kelas : index
    //    $V_Kelas : data (isi index)
