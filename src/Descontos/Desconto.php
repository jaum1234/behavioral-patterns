<?php
namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calcularDesconto(Orcamento $orcamento): float;
}
