<?php

require './vendor/autoload.php';

use DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use DesignPattern\GerarPedido;
use DesignPattern\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new EnviarPedidoPorEmail());
$gerarPedidoHandler->execute($gerarPedido);
