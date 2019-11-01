<?php

    $cont = 1; 

    while($cont<=50){
        if($cont == 50){
        echo $cont . ".";
        }elseif($cont == 49){
        echo $cont . 'e';
        
        }else{
        echo $cont . ",";
        }
        
       

        $cont++;
    }
   