<?php
namespace Headfirst\Factory;
use Headfirst\Factory\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzerlla Cheese';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}