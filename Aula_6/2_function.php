<?php


$salario = '2000';

function aumento()
{
    $salario = 3000;

    echo "Salario:" . $salario . "<br>";
}

aumento();


echo "Salario fora da function " . $salario;

echo "<br>";

$a = 32;

function testeEscopo()
{
    global $a;

    echo 'Global a:' . $a;
}

testeEscopo();
echo "<br>";
echo "Valor de fora:" . $a;
