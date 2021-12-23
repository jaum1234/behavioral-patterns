<?php 

namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;
use DesignPattern\Descontos\Desconto;


class DescontoMaisDe5Itens extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->qtdItens > 5) {
            return $orcamento->valor*0.1;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}