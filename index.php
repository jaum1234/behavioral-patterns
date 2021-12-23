<?php 

use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Orcamento;

require './vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcular($orcamento, new Icms());