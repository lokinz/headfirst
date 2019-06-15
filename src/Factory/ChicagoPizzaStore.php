<?php
namespace Headfirst\Factory;
use Headfirst\Factory\PizzaStore;
use Headfirst\Factory\Pizza;
use Headfirst\Factory\ChicagoStyleCheesePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        switch ($type){
            case 'cheese':
                return new ChicagoStyleCheesePizza;
            default:
                return null;
        }
    }
}