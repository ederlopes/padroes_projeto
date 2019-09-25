<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});


$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula(new ISS($reforma));

echo '<br />';

echo $calculadora->calcula(new ICMS($reforma));