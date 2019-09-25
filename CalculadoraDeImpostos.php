<?php

class CalculadoraDeImpostos
{
    public function calcula(Imposto $objImposto)
    {
        return $objImposto->calcula();
    }

}