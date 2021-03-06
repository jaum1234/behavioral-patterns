<?php 

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;
use DesignPattern\EstadosOrcamento\Aprovado;
use DesignPattern\EstadosOrcamento\Reprovado;

class EmAprovacao extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float 
    {
        return $this->orcamento*0.05;
    }

    public function aprovar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprovar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}