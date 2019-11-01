<?php


    $carros = array();

    $carros[0] = "Civic";

    $carros[1] = "Pajero";

    $carros[2] = "Fusca";

    var_dump($carros);


    echo "<hr>";

    echo count($carros);

    $cores = [];

    $cores[] = 'Branco';
    $cores[] = 'Azul';
    $cores[] = 'Vermelho';
    $cores[] = 'Preto';


    var_dump($cores);

    echo "<hr>";

    echo count($cores);

    $ruas = array(0=>"Paulista", 1=>"Pamplona", 2=>"Campinas", 3=>"Itu");

    var_dump($ruas);

    echo "<hr>";

    $frutas = array("Pera", "Maça", "Banana");

    var_dump($frutas);

    echo '<hr>';

    $cursos = array("php"=>"Eduarda", "htm"=>"Duda", "react"=>"Rosinha");

    var_dump($cursos);


    $honda['moto'] = 'SH 300';
    $honda['carro'] = 'Civic';
    $honda['aviao'] = 'Honda Jet';
    $honda['nautica'] = 'HP500';

    var_dump($honda);

    

?>