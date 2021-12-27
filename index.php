<?php

use DesignPattern\CalculadoraDeDescontos;
use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Impostos\Icpp;
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
$orcamento->valor = 32;
$orcamento->qtdItens = 4;

$calculadora = new CalculadoraDeDescontos();

//echo $calculadora->calcular($orcamento);

$icpp = new Icpp();
echo $icpp->calcularImposto($orcamento);

