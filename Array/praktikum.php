<?php
    $kelas=[
        ["NIS" => "1110","namaSiswa" => "Budi", "kelas" => "XR1","nilaiMat" => 80,"nilaiBing" => 90, "nilaiBind" => 100],
        ["NIS" => "1111","namaSiswa" => "Joko", "kelas" => "XR2","nilaiMat" =>60,"nilaiBing" =>80,"nilaiBind" =>100],
        ["NIS" => "1112","namaSiswa" => "Arip", "kelas" => "XR3","nilaiMat" =>85,"nilaiBing" =>75,"nilaiBind" =>70],
        ["NIS" => "1113","namaSiswa" => "Jamal", "kelas" => "XR4","nilaiMat" =>98,"nilaiBing" =>79,"nilaiBind" =>80],
        ["NIS" => "1114","namaSiswa" => "Yanto", "kelas" => "XR5","nilaiMat" =>96,"nilaiBing" =>78,"nilaiBind" =>88],
    ];

    

    echo'<table border= "1" cellspacing="0" cellpadding="25px">';
        echo '<tr>';
        echo '<th> NIS </th><th>Nama Siswa</th><th>Kelas</th><th>Nilai Matematika</th><th>Nilai Bhs.Inggris</th><th>Nilai Bhs Indonesia</th><th>Rata Rata</th>';
        echo '<tr>';
        foreach($kelas as $K_Kelas => $V_Kelas){
            $x =$V_Kelas['nilaiMat'] + $V_Kelas['nilaiBing'] + $V_Kelas['nilaiBind'];
            $result = $x / 3;
            echo'<tr>';
                echo'<td>'.$V_Kelas['NIS'].'</td>';
                echo'<td>'.$V_Kelas['namaSiswa'].'</td>';
                echo'<td>'.$V_Kelas['kelas'].'</td>';
                echo'<td>'.$V_Kelas['nilaiMat'].'</td>';
                echo'<td>'.$V_Kelas['nilaiBing'].'</td>';
                echo'<td>'.$V_Kelas['nilaiBind'].'</td>';
                echo'<td>'.$result;
            echo'</tr>';
        }
    echo'</table>';
