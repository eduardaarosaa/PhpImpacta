<?php

    function tabuada($num1, $num2){

        while($num1<=$num2){
            if($num1 == 3){
                echo "<p style='color:red';>" . $num1 . " x " . $num2 . " = " . $num1*$num2 . "<br></p>";
            }else{
                echo $num1 . " x " . $num2 . " = " . $num1*$num2 . "<br>";
                
            }
      

            $num1++;
        }

    }

    tabuada(0,10);