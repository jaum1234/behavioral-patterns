<?php 
namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function executarAcao(Pedido $pedido): void;
}