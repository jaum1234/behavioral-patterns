<?php
namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;
use DesignPattern\Impostos\Imposto;
use DesignPattern\Impostos\ImpostoComDuasAliquotas;

class Ikcv extends ImpostoComDuasAliquotas
{
    protected function deveAplicarAliquotaMax(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->qtdItens > 3;
    }

    protected function calcularAliquotaMax(Orcamento $orcamento): float
    {
        return $orcamento->valor*0.04;
    }

    protected function calcularAliquotaMin(Orcamento $orcamento): float
    {
        return $orcamento->valor*0.025;
    }
}