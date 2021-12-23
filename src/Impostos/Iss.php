<?php 

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calcularImposto(Orcamento $orcamento)
    {
        return $orcamento->valor * 0.06;
    }
}