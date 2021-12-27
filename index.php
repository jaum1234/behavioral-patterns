<?php

use DesignPattern\CalculadoraDeDescontos;
use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Impostos\Ikcv;
use DesignPattern\Orcamento;

require './vendor/autoload.php';

//$calculadora = new CalculadoraDeImpostos();
//
//$orcamento = new Orcamento();
//$orcamento->valor = 100;
//
//echo $calculadora->calcular($orcamento, new Icms());

$orcamento = new Orcamento();
$orcamento->valor = 700;
$orcamento->qtdItens = 4;

$calculadora = new CalculadoraDeDescontos();

echo $calculadora->calcular($orcamento);

