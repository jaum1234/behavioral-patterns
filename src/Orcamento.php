<?php 

namespace DesignPattern;

use DesignPattern\EstadosOrcamento\EmAprovacao;
use DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $qtdItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicarDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calcularDescontoExtra($this);
    }

    public function aprovar()
    {
        $this->estadoAtual->aprovar($this);
    }

    public function reprovar()
    {
        $this->estadoAtual->aprovar($this);
    }

    public function finalizar()
    {
        $this->estadoAtual->aprovar($this);
    }
}