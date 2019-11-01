<?php


abstract class Cliente
{
    protected $saldo_min;

    public function saldoMinimo()
    {

        $this->saldo_min = 0;
    }
}

class Fisica extends Cliente
{
    public function saldoMinimo()
    {
        $this->saldo_min = 100;
    }
}

class Juridica extends Cliente
{ }
