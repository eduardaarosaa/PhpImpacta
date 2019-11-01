<?php

    //Constantes - Locais na memoria em que podemos armazenar informações, são iguais abs
    //Variaveis porem não podem ter seu conteudo alterado durante a excecução do programa. 
    define ('H', '<hr>');

    define('CURSO', 'PHP mod I');

    define('NOME', 'Eduarda', true);

    echo CURSO;
    //padrão do mercado letras maiusculas em constantes;

    echo H;

    echo NOME;

    echo H;

    echo NOmE;


     ##########################

     //Mostra as constantes já pré definidas no php
     
     $constantes = get_defined_constants();

     // retorna um array 
     echo '<pre>';
     print_r($constantes);
     echo '</pre>';


?>