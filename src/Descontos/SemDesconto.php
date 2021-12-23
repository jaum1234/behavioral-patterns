<?php
namespace DesignPattern\Descontos;

use DesignPattern\Descontos\Desconto;
use DesignPattern\Orcamento;

class SemDesconto extends Desconto 
{
    public function __construct()
    {
    }

    public function calcularDesconto(Orcamento $orcamento): float 
    {
        return 0;
    }
}