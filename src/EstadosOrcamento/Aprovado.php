<?php 

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;
use DesignPattern\EstadosOrcamento\Finalizado;

class Aprovado extends EstadoOrcamento
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