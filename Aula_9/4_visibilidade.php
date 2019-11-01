<?php

class Cliente
{

    //acessivel, fora e por herança.
    public $nome = "Eduarda";

    //Acessivel somente internamente e por herança.
    protected $senha = '1234';

    //Acessivel internamente - dentro da classe.
    private $cpf = '121212121';


    public function verPropriedades()
    {
        echo "Nome: $this->nome <br>";
        echo "Senha: $this->senha <br>";
        echo "CPF: $this->cpf <br>";
    }
}

$cliente1 = new Cliente();
$cliente1->verPropriedades();

echo "<hr>";


echo $cliente1->nome . '<br>';

//echo $cliente1->senha . '<br>';

//echo $cliente1->cpf . '<br>';


class Pessoa extends Cliente
{

    public function verPropriedades2()
    {
        echo "Nome: $this->nome <br>";
        echo "Senha: $this->senha <br>";
        echo "CPF: $this->cpf <br>";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->verPropriedades2();
