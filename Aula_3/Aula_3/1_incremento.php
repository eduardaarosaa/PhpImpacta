<?php

    define ('H', "<hr>");
    //Operador Incremental e decremental
    $x = 1; 

    echo 'x: ' . $x;


    echo H;

    $x++; // pos incremento. //2

    echo 'x: '. $x; 

    echo H;

    ++$x; // pré incremento. //3

    echo 'x: '. $x; 

    echo H;

    echo $x++;//4

    echo H;

    echo 'x: '. $x; //4
    
    echo H;

    echo ++$x;


    ####################

    //decremento;

    $y = 5;

    $y--;

    echo "y: " . $y;
    echo "<hr>";


    $y--; 

    echo "y: " . $y;
    echo "<hr>";

    --$y;

    echo "y: " . $y;
    echo "<hr>";

    echo $y--;

    echo H;

    echo "y: " . $y;
    echo "<hr>";

    echo --$y;





?>