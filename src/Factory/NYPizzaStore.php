<?php
namespace Headfirst\Factory;
use Headfirst\Factory\PizzaStore;
use Headfirst\Factory\Pizza;
use Headfirst\Factory\NYCStyleCheesePizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        switch ($type){
            case 'cheese':
                return new NYCStyleCheesePizza;
            default:
                return null;
        }
    }
}