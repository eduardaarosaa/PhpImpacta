<?php

    //Estudo do empty
    //Verifica se a variavel esta vazia.

    $a = "";

    echo "<hr>";

    echo $a;

    echo "<br>";

    //se estive vazia ele retorna 1.
    echo 'A $a esta vazia:' . empty($a);

    echo "<hr>";

    $a = "Impacta";

    echo "<br>";
    //Essa variavel NÃO está vazia. 
    // o simbolo de exclamação é o NÃO - NEGATIVO.
    echo 'A $a esta vazia:' . !empty($a);





    ?>