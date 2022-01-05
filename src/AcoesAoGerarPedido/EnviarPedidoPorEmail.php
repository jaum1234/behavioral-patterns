<?php 
namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;
use SplObserver;
use SplSubject;

class EnviarPedidoPorEmail implements SplObserver //AcaoAposGerarPedido
{
    //public function executarAcao(Pedido $pedido): void
    //{
    //    echo "Enviando pedido por email." . PHP_EOL;
    //}

    public function update(SplSubject $pedido): void
    {
        echo "Enviando pedido por email." . PHP_EOL;
    }
}