<?php
//nas classes temos os metodos 
//Uma classe tem metodos e propriedades
//Os metodos são as funcoes
//public - visibilidade
//propriedade nome


//Cria a classe
class Produto
{
    public $nome;

    public function exibeNome()
    {
        echo $this->nome;
    }
}

//instancia a classe
$produto1 = new Produto();
$produto1->nome = "Dell 16GB de RAM";
$produto1->exibeNome();

//var_dump(produto1);

$produto2 = new Produto();
$produto2->nome = "Celular";
$produto2->exibeNome();
