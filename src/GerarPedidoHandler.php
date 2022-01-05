<?php 

namespace DesignPattern;

use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use SplObserver;
use SplSubject;

class GerarPedidoHandler implements SplSubject
{
    /**@var AcaoAposGerarPedido */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct(/* PedidoRepository, MailService e etc */)
    {
    }

    //public function adicionarAcoes(AcaoAposGerarPedido $acao)
    //{
    //    $this->acoesAposGerarPedido[] = $acao ;
    //}

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $this->pedido = $pedido;
        $this->notify();

        //foreach ($this->acoesAposGerarPedido as $acao) {
        //    $acao->executarAcao();
        //}

        //PedidoRepository
        //echo "Cria pedido no banco de dados" . PHP_EOL;
//
        ////MailService
        //echo "Envia e-mail para o cliente" . PHP_EOL;
//
        ////...
    }

    /**
     *  É mais usual utilizar a primeira 
     *  abordagem, com observers personalizados.
     */

    public function attach(SplObserver $observer): void
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
    }

    public function notify(): void
    {
        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}