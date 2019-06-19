<?php
namespace Headfirst\Factory;
use Headfirst\Factory\PizzaStore;
use Headfirst\Factory\Pizza;
use Headfirst\Factory\ChicagoPizzaIngredientFactory;
use Headfirst\Factory\CheesePizza;
use Headfirst\Factory\ClamPizza;
use Headfirst\Factory\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory;

        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Clam Pizza');
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Veggie Pizza');
                break;

        }

        return $pizza;
    }
}