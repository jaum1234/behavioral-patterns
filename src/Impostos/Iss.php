<?php 

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}