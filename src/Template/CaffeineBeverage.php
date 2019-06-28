<?php


namespace Headfirst\Template;


abstract class CaffeineBeverage
{
    final public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract protected function brew(): void;
    abstract protected function addCondiments(): void;

    protected function boilWater(): void
    {
        echo 'Boiling Water' . PHP_EOL;
    }

    protected function pourInCup(): void
    {
        echo 'Pouring into cup' . PHP_EOL;
    }
}