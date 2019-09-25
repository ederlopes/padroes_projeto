<?php

abstract class Ipizza
{
    public abstract function prepare();
    public function bake(){
        return 'Cozinhando a pizza';
    }
    public function cut(){
        return 'Cortando a pizza';
    }
    public function box(){
        return 'Colocando a pizza na caixa';
    }

}


class CheesePizza extends Ipizza
{
    public function prepare(){

    }
}

class ChickenPizza extends Ipizza
{
    public function prepare(){

    }
}

class PepperoniPizza extends Ipizza
{
    public function prepare(){

    }
}


class SimplePizzaFActory
{
    public function makePizza($pizzaName){
        $pizza = null;
        switch ($pizzaName){
            case ('peperonni'):
                $pizza = new PepperoniPizza();
                break;
            case ('chickenPizza'):
                $pizza = new ChickenPizza();
                break;
            case ('cheese'):
                $pizza = new CheesePizza();
                break;
        }
        return $pizza;
    }
}


class Client
{
    public $factory;

    public function __construct()
    {
        $this->factory = new SimplePizzaFActory();
    }

    public function orderPizza($pizzaName)
    {
        $pizza = null;

        $pizza = $this->factory->makePizza($pizzaName);

        return $pizza;
    }

}

$cliente = new  Client();

$pizza = $cliente->orderPizza('peperonni');

var_dump($pizza);

echo $pizza->bake();
?>