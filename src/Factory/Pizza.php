<?php
namespace Headfirst\Factory;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        echo 'Tossing dough...' . PHP_EOL;
        echo 'Adding sauce...' . PHP_EOL;
        echo 'Adding toppings: ' . PHP_EOL;
        foreach($this->toppings as $topping){
            echo '   ' . $topping . PHP_EOL;
        }
    }

    public function bake(): void
    {
        echo 'Bake for 25 mins at 350' . PHP_EOL;
    }

    public function cut(): void 
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in offical PizzaStore box' . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
