<?php

namespace DesignPattern\EstadosOrcamento;

use DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    abstract public function calcularDescontoExtra(Orcamento $orcamento): float;

    public function aprovar(Orcamento $orcamento): void
    {
        throw new \DomainException("Esse orçamento nao pode ser aprovado.");
    }

    public function reprovar(Orcamento $orcamento): void
    {
        throw new \DomainException("Esse orçamento nao pode ser reprovado.");
    }

    public function finalizar(Orcamento $orcamento): void 
    {
        throw new \DomainException("Esse orçamento nao pode ser finalizado.");
    }
}