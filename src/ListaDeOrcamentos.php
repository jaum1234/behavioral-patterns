<?php 

use DesignPattern\Orcamento;

class ListaDeOrcamentos implements IteratorAggregate //\Iterator
{
    private Orcamento $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos = $orcamento;
    }

    //public function orcamentos()
    //{
    //    return $this->orcamentos;
    //}

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }
}