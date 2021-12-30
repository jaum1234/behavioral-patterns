<?php 

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Aprovado
{
    public function calcularDescontoExtra(Orcamento $orcamento): float 
    {
        return $this->orcamento*0.02;
    }

    public function finalizar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}