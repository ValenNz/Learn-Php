<?php 
    echo '<table border = "1px" cellpadding="20px" cellspacing = "0" align="center">';
        for($x=1;$x<=5;$x++){
            echo '<tr>';
                for($y=1;$y<=5;$y++){
                    echo '<td>'.$x*$y.'</td>';
                }
            echo '</tr>';
        }
    echo '</table>';
?>