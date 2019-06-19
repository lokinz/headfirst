<?php
namespace Headfirst\Factory;
use Headfirst\Factory\Pizza;

class NYCStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = "Thin Crust Dough";
        $this->sauce = 'Marinara';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}