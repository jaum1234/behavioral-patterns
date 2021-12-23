<?php

use DesignPattern\Orcamento;

class CalculadoraDeDescontos 
{
    public function calcular(Orcamento $orcamento)
    {
        if ($orcamento->qtdItens > 5) {
            return $orcamento->valor*0.1;
        }

        return 0;
    }
}