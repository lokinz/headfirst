<?php
namespace Headfirst\Factory;
use Headfirst\Factory\Pizza;
use Headfirst\Factory\PizzaIngredientFactory;

class VeggiePizza extends Pizza
{
    protected $ingredientFacotry;

    public function __construct(PizzaIngredientFactory $ingredientFacotry)
    {
        $this->ingredientFacotry = $ingredientFacotry;
    }

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        $this->dough = $this->ingredientFacotry->createDough();
        $this->sauce = $this->ingredientFacotry->createSauce();
        $this->cheese = $this->ingredientFacotry->createCheese();
        $this->veggies = $this->ingredientFacotry->createVegies();
    }


}