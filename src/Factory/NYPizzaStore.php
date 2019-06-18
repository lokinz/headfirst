<?php
namespace Headfirst\Factory;
use Headfirst\Factory\PizzaStore;
use Headfirst\Factory\Pizza;
use Headfirst\Factory\NYPizzaIngredientFactory;
use Headfirst\Factory\CheesePizza;
use Headfirst\Factory\ClamPizza;
use Headfirst\Factory\VeggiePizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory;

        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('NY Style Cheese Pizza');
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('NY Style Clam Pizza');
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('NY Style Veggie Pizza');
                break;
        }

        return $pizza;
    }
}