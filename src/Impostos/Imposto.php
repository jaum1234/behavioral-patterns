<?php 

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

interface Imposto
{
    public function calcularImposto(Orcamento $orcamento);
}