<?php

namespace Headfirst\Factory;
use Headfirst\Factory\PizzaIngredientFactory;
use Headfirst\Factory\Ingredient\Dough;
use Headfirst\Factory\Ingredient\ThickCrustDough;
use Headfirst\Factory\Ingredient\PlumTomatoSauce;
use Headfirst\Factory\Ingredient\MozzarellaCheese;
use Headfirst\Factory\Ingredient\BlackOlives;
use Headfirst\Factory\Ingredient\Spinach;
use Headfirst\Factory\Ingredient\Eggplant;
use Headfirst\Factory\Ingredient\FrozenClam;
use Headfirst\Factory\Ingredient\SlicedPepperoni;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough{
        return new ThickCrustDough;
    }

    public function createSauce(): \Headfirst\Factory\Ingredient\Sauce
    {
        return new PlumTomatoSauce;
    }

    public function createCheese(): \Headfirst\Factory\Ingredient\Cheese
    {
        return new MozzarellaCheese;
    }

    public function createVegies(): array
    {
        return [new BlackOlives, new Spinach, new Eggplant];
    }

    public function createPepperoni(): \Headfirst\Factory\Ingredient\Pepperoni
    {
        return new SlicedPepperoni;
    }

    public function createClam(): \Headfirst\Factory\Ingredient\Clams
    {
        return new FrozenClam;
    }
}