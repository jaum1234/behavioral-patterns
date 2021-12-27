<?php 

namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;
use DesignPattern\Descontos\Desconto;


class DescontoMaisDe5Itens extends Desconto
{
    protected function deveCalcularProxDesconto($orcamento): bool
    {
        return $orcamento->qtdItens > 5;
    }

    protected function desconto($orcamento): float 
    {
        return $orcamento->valor*0.1;
    }
}