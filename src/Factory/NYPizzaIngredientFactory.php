<?php

namespace Headfirst\Factory;
use Headfirst\Factory\PizzaIngredientFactory;
use Headfirst\Factory\Ingredient\ThinCrustDough;
use Headfirst\Factory\Ingredient\Dough;
use Headfirst\Factory\Ingredient\MarinaraSauce;
use Headfirst\Factory\Ingredient\ReggianoCheese;
use Headfirst\Factory\Ingredient\Garlic;
use Headfirst\Factory\Ingredient\Onion;
use Headfirst\Factory\Ingredient\Mushroom;
use Headfirst\Factory\Ingredient\RedPeppers;
use Headfirst\Factory\Ingredient\SlicedPepperoni;
use Headfirst\Factory\Ingredient\FreshClams;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough{
        return new ThinCrustDough;
    }

    public function createSauce(): \Headfirst\Factory\Ingredient\Sauce
    {
        return new MarinaraSauce;
    }

    public function createCheese(): \Headfirst\Factory\Ingredient\Cheese
    {
        return new ReggianoCheese;
    }

    public function createVegies(): array
    {
        return [new Garlic, new Onion, new Mushroom, new RedPeppers];
    }

    public function createPepperoni(): \Headfirst\Factory\Ingredient\Pepperoni
    {
        return new SlicedPepperoni;
    }

    public function createClam(): \Headfirst\Factory\Ingredient\Clams
    {
        return new FreshClams;
    }
}