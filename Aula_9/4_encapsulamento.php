<?php

//eu tenho uma propriedade protegida
//crio um metodo public para exibir ou alterar ela
//isso é encapsulamento
class Cliente
{
    protected $cep;

    public function setCEP($cep)
    {
        if (strlen($cep) < 8) {
            throw new Error('Cep invalido');
        }

        $this->cep = $cep;
    }
}

$cliente1 = new Cliente();

$cliente1->setCEP('07097380');
