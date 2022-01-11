<?php

use DesignPattern\Orcamento;
use DesignPattern\ListaDeOrcamentos;

require_once 'vendor/autoload.php';

$listaOrcamentos = [];

$orcamento1 = new Orcamento();
$orcamento1->qtdItens = 7;
$orcamento1->aprovar();
$orcamento1->valor = 1000.40;

$orcamento2 = new Orcamento();
$orcamento2->qtdItens = 2;
$orcamento2->reprovar();
$orcamento2->valor = 8000.2;

$orcamento3 = new Orcamento();
$orcamento3->qtdItens = 15;
$orcamento3->aprovar();
$orcamento3->finalizar();
$orcamento3->valor = 530.40;

//$listaOrcamentos = [
//    $orcamento1,
//    $orcamento2,
//    $orcamento3
//];

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos->orcamentosFinalizados() as $orcamento) {
    echo PHP_EOL;

    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd. itens: " . $orcamento->qtdItens . PHP_EOL;

    echo PHP_EOL;
}

//foreach ($listaOrcamentos as $orcamento) {
//    echo PHP_EOL;
//
//    echo "Valor: " . $orcamento->valor . PHP_EOL;
//    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
//    echo "Qtd. itens: " . $orcamento->qtdItens . PHP_EOL;
//
//    echo PHP_EOL;
//}