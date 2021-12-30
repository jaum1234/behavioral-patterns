<?php
namespace DesignPattern;

use DesignPattern\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;

    
}