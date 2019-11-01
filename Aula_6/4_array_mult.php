<?php


$coisas['cores'] = array("Azul", "Red", "Geen");

$coisas['celulares'] = array('Iphone', 'Motorola', 'ReaMi');

foreach ($coisas as $key => $valor) {

    echo "$key <br>";

    foreach ($valor as $a => $b) {

        echo $b . "<br>";
    }
}


echo '<hr>';

$familia =  [

    ["mae", "Rosangela"],
    ['irma', "Milena"],
    ['pai', "Eduardo"],
    ['irmao', "nothing"]
];


foreach ($familia as $membro) {

    echo $membro[0] . ' ' .  $membro[1] . "<br>";
}
