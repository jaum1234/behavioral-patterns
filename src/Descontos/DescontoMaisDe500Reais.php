<?php 
namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;
use DesignPattern\Descontos\Desconto;


class DescontoMaisDe500Reais extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor*0.05;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}