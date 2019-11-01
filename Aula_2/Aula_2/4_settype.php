<?php

    //pré definir o tipo da variável.
    settype($a, 'string');

    echo '$a: ' .gettype($a);

    echo "<hr>";

    settype($b, 'integer');
    //atribuindo o valor texto ele troca dinamicamente o seu tipo de int para String.
    $b = "Texto";

    echo '$b: ' .gettype($b);

    echo "<hr>";

    $c = "20tebuscar";

    echo '$c: '.gettype($c);
    echo "<br>";

    echo $c;

    //transformando string em inteiro
    settype($c, 'int');

    echo "<br>";


    echo gettype($c);

    echo "<br>";
    //Como o conteudo começa com números, quando converte para int, ele exibe o número .... APENAS quando começa com números.
    echo $c;

?>