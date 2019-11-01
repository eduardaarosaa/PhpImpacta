<?php

//Array é um tipo composto.
$arrAlunos = ['Vinicius', 'Mirella', 'Marcia', 'Gabriel'];

echo "<hr>";

echo "Tipo ".gettype($arrAlunos);

echo "<br>";

//Verificando se é um array.
echo "Array:".is_array($arrAlunos);

echo "<br>";

echo count($arrAlunos);

echo "<br>";

//Formatação do array.
echo "<pre>";

print_r($arrAlunos);

//var dump tem quantidade de caracteres, quanto mais caracteres menos indices ele exibe. 
var_dump($arrAlunos);

echo "</pre>";

//Objeto
/*
A StdClass é uma classe predefinida do PHP. Ela é vazia, ou seja, não possui métodos nem propriedades. Mas qual o objetivo disto? 
Ela é a classe padrão dos objetos que não são declarados, ou seja, quando você converte um array ou algum outro tipo para objeto, 
na verdade está criando um objeto da StdClass.
É útil também utilizar a StdClass quando se deseja criar um objeto vazio e ir adicionando as propriedades conforme necessário.*/

$objeto = new StdClass();
$objeto->nome = "Duda";
$objeto->idade = 25;

var_dump($objeto);

$a = NULL;

var_dump($a);

?>