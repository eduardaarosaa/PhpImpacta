<?php

final class Pessoa
{
    public $nome;

    public function alterarNome($novoNome)
    {
        $this->nome = $novoNome;
    }
}

//Quando você coloca final em uma classe você não deixa ela ser herdada. 
//final é uma palavra reservada.
