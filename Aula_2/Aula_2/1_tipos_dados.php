<?php


$a = 25;

$b = -58;

$c = 1025.48;

$d = "Impacta";

$e = true; 

//gettype - verifica o type da varivel 
// o PHP é tipado.
echo "a: " . gettype($a);

echo "<br>";

// Retorna 1 quando é inteiro.
echo "int: ". is_int($a);

echo "<br>";

echo "<hr>";

echo "b: " . gettype($b);
echo "<br>";


echo "int: ". is_int($b);

echo "<br>";


echo "<hr>";

echo "c: " . gettype($c);
echo "<br>";


echo "int: ". is_int($c);

echo "<br>";

//is_float retorna se é um float
echo "float:" . is_float($c);

echo "<hr>";

echo "d: " . gettype($d);
echo "<br>";

// is_string retorna se é uma string
echo "int: ". is_string($d);

echo "<br>";


echo "<hr>";

echo "e: " . gettype($e);
echo "<br>";

// is_bool retorna se é booleano
echo "int: ". is_bool($e);

echo "<br>";


?>