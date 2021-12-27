<?php 
namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

abstract class ImpostoComDuasAliquotas implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarAliquotaMax($orcamento)) {
            return $this->calcularAliquotaMax($orcamento);
        }

        return $this->calcularAliquotaMin($orcamento);
    }

    abstract protected function deveAplicarAliquotaMax(Orcamento $orcamento): bool;
    abstract protected function calcularAliquotaMax(Orcamento $orcamento): float;
    abstract protected function calcularAliquotaMin(Orcamento $orcamento): float;


}