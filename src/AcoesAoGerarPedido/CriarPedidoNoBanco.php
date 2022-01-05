<?php 
namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;
use SplObserver;
use SplSubject;

class CriarPedidoNoBanco implements SplObserver //AcaoAposGerarPedido
{
    //public function executarAcao(Pedido $pedido): void
    //{
    //    echo "Salvando pedido nno banco de dados." . PHP_EOL;
    //}

    public function update(SplSubject $pedido): void
    {
        echo "Salvando pedido nno banco de dados." . PHP_EOL;
    }
}