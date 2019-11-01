<?php


echo "Seu nome é:" . $_GET['nome'];

echo "<br>";


echo "Sua nota é:" . $_GET['nota'];

echo "<br>";

if ($_GET['nota'] == 10) {

    echo "Parabéns!";
} elseif ($_GET['nota'] == 8 || $_GET['nota'] == 9) {
    echo "Suas notas são boas";
} elseif ($_GET['nota'] >= 5 && $_GET['nota'] <= 7) {
    echo "Você está na média";
} else {
    echo "Você será reprovado";
}

echo "<br>";
