<?php

class ICMS implements Imposto
{

    private $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function calcula()
    {
        return  $this->orcamento->getValor() * 0.05;
    }
}