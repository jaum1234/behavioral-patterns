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

    protected function calcular(Orcamento $orcamento): float
    {
        if ($this->deveCalcularProxDesconto()) {
            return $this->desconto();
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    } 

    abstract public function calcularDesconto(Orcamento $orcamento): float;
}
