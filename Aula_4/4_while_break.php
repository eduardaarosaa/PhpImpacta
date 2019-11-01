<?php

define('H',"<hr>");


$parar = 5; 
$cont = 1;

while($cont<=100){

    echo "$cont,";

    if($cont == $parar){

        break;//Interrompe o laço.
    }

    $cont++;
}

echo H;


$continuar = 3;

$x = 1;

while($x <= 10){

    if($x == $continuar){
        $x++;
        continue; //sempre que usar o continue, temos que usar o incremento, se não entra em loop.
    }
    echo "$x,";

    $x++;
}






?>