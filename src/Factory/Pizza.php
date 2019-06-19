<?php
namespace Headfirst\Factory;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $veggies = [];
    protected $cheese;
    protected $pepperoni;
    protected $clam;

    abstract public function prepare(): void;

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

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString() {
        $makup = [];

        if($this->dough) {
            $makup[] = $this->dough->name;
        }

        if($this->sauce) {
            $makup[] = $this->sauce->name;
        }

        if($this->cheese) {
            $makup[] = $this->cheese->name;
        }

        if($this->pepperoni) {
            $makup[] = $this->pepperoni->name;
        }

        if($this->clam) {
            $makup[] = $this->clam->name;
        }
        
        foreach($this->veggies as $veg){
            $makup[] = $veg->name;
        }

        return rtrim($this->name . ': ' . implode(", ", $makup), ' ,');
    }
}
