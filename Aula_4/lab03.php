<?php 

    function tabela($linhas, $color){

        echo '<table border="1">';

        for($i=0; $i<=$linhas; $i++){
            
                    if($i == $color){
                    
                    echo '<tr><td style="background:pink; color:white;">'. $i . '</td></tr>';
                    }
                    elseif($i % 2 == 0){
                        echo '<tr><td style="background:black; color:white;">'. $i . '</td></tr>';
                    
                    }else{
                    echo '<tr><td>'. $i . '</td></tr>';
                     }
                    }
                    echo '</table>';
                }


                tabela(10,5);
                


?>