<?php

    echo '<table border="1">';

    for($i=0; $i<=10; $i++){

        if($i % 2 == 0){
        
        echo '<tr><td style="background:black; color:white;">'. $i . '</td></tr>';
            
        }else{
            echo '<tr><td>'. $i . '</td></tr>';
        }

        echo "<hr>";

        //Outra maneira;
        $cor = ($i%2)?"#ccc":"#fff";
        echo '<tr style="background:'.$cor.'"><td>'.$i.'</td></tr>';
        

        
	}	
       

    

    echo "</table>";