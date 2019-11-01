<?php 

    $nota = 0; 


    if($nota  == 10 ){

        echo "<p style='color:green'>Texto </p>";
    }elseif($nota == 8 || $nota == 9){
        echo "<p style='color:orange'>Texto </p>";
    }elseif($nota >= 5 && $nota <=7){
        echo "<p style='color:yellow'>Texto </p>";
    }else{
        echo "<p style='color:red'>Texto </p>";
    }



    ?>