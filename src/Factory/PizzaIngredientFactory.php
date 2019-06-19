<?php
namespace Headfirst\Factory;

use Headfirst\Factory\Ingredient\Dough;
use Headfirst\Factory\Ingredient\Sauce;
use Headfirst\Factory\Ingredient\Cheese;
use Headfirst\Factory\Ingredient\Veggies;
use Headfirst\Factory\Ingredient\Pepperoni;
use Headfirst\Factory\Ingredient\Clams;

interface PizzaIngredientFactory 
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    /** @return Veggies[]  */
    public function createVegies(): array;
    public function createPepperoni(): Pepperoni;
    public function createClam(): Clams;
}