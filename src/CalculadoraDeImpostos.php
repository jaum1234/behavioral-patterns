<?php 

namespace DesignPattern;

use DesignPattern\Impostos\Imposto;
use DesignPattern\Orcamento;

class CalculadoraDeImpostos 
{
    public function calcular(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcularImposto($orcamento);
    }
}