<?php 

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;
use DesignPattern\Impostos\Imposto;


class Icms implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}