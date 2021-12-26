<?php
namespace DesignPattern\Descontos;

use DesignPattern\Descontos\Desconto;
use DesignPattern\Orcamento;

class SemDesconto extends Desconto 
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calcularDesconto(Orcamento $orcamento): float 
    {
        return 0;
    }
}