<?php


function aula($aluno, $professor)
{
    echo "$aluno = $professor <br>";
}

aula('Gabriel', 'Eduarda');

aula('Diego', 'Leonardo');

//função do tipo retorno.

function somar($x, $y)
{

    return $x + $y;
}

echo "Soma:" . somar(10, 20) . '<br>';


$total = 45 + somar(135, 60);

echo "O valor total é:" . $total;


function formata_valor($valor)
{
    return number_format($valor, 2, ", ", ".");
}

echo "<br>";
echo "Formatdo:" . formata_valor(1500);
