<?php 

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Finalizado
{
    public function calcularDescontoExtra(Orcamento $orcamento): void
    {
        throw new \DomainException("Um orçamento finalizado nao pode receber desconto");
    }
}