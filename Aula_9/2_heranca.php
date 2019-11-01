<?php

class Cliente
{

    public $nome;

    public $email;

    public $telefone;

    public function imprimeCliente()
    {
        echo "Nome:" . $this->nome . '<br>';
        echo "E-mil:" . $this->email . '<br>';
        echo "Telefone:" . $this->telefone . '<br>';
    }
}
//Herança a palavra extends herda as propriedades de CLiente.
class PessoaFisica extends Cliente
{

    public $cpf;
}

$cliente1 = new PessoaFisica();
$cliente1->nome = 'Eduarda';
var_dump($cliente1);

class PessoaJuridica extends Cliente
{
    public $cnpj;
}

$cliente2 = new PessoaJuridica();
$cliente2->cnpj = '21212121';
var_dump($cliente2);

//Uma classe abstrada ela não pode ser instanciada 
//É apenas um modelo.
// exemplo abstract class cliente
