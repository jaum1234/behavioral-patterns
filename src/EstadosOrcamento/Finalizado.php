<?php 

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Um orçamento finalizado nao pode receber desconto");
    }
}