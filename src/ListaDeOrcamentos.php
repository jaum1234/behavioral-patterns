<?php
namespace DesignPattern;

use Traversable;
use ArrayIterator;
use IteratorAggregate;
use DesignPattern\Orcamento;
use DesignPattern\EstadosOrcamento\Finalizado;

class ListaDeOrcamentos implements IteratorAggregate //\Iterator
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    //public function orcamentos()
    //{
    //    return $this->orcamentos;
    //}

    public function orcamentosFinalizados()
    {
        return array_filter($this->orcamentos, function ($orcamento) {
            return $orcamento->estadoAtual == new Finalizado();
        });
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }
}