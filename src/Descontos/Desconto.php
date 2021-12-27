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
        if ($this->deveCalcularProxDesconto($orcamento)) {
            return $this->desconto($orcamento);
        }

        return $this->proximoDesconto->calcular($orcamento);
    } 

    //abstract public function calcularDesconto(Orcamento $orcamento): float;
    abstract protected function deveCalcularProxDesconto($orcamento): bool;
    abstract protected function desconto($orcamento): float;


}
