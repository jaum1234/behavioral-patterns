<?php 

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Icpp extends ImpostoComDuasAliquotas
{
    protected function deveAplicarAliquotaMax(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calcularAliquotaMax(Orcamento $orcamento): float
    {
        return $orcamento->valor*0.03;
    }

    protected function calcularAliquotaMin(Orcamento $orcamento): float
    {
        return $orcamento->valor*0.02;
    }
}