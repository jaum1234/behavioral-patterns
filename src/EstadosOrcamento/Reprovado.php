<?php 

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Um orçamento reprovado nao pode receber desconto");
    }

    public function finalizar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}