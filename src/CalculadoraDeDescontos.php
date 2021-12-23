<?php
namespace DesignPattern;

use DesignPattern\Orcamento;
use DesignPattern\Descontos\SemDesconto;
use DesignPattern\Descontos\DescontoMaisDe5Itens;
use DesignPattern\Descontos\DescontoMaisDe500Reais;

class CalculadoraDeDescontos 
{
    public function calcular(Orcamento $orcamento)
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(new DescontoMaisDe500Reais(new SemDesconto()));

        return $cadeiaDeDescontos->calcularDesconto($orcamento);

        //SEGUNDA SOLUÇAO

        //$desconto5Itens = new DescontoMaisDe5Itens();
        //$desconto = $desconto5Itens->calcularDesconto($orcamento);
//
        //if ($desconto === 0) {
        //    $desconto500Reais = new DescontoMaisDe500Reais();
        //    $desconto = $desconto500Reais->calcularDesconto($orcamento);
        //}
//
        //return $desconto;

        //PRIMEIRA SOLUÇAO 

        //if ($orcamento->qtdItens > 5) {
        //    return $orcamento->valor*0.1;
        //}
//
        //if ($orcamento->valor > 500) {
        //    return $orcamento->valor*0.05;
        //}
//
        //return 0;
    }
}