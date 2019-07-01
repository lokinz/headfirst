<?php


namespace Headfirst\Template;


abstract class CaffeineBeverageWithHook
{
    final public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if($this->customerWantsCondiments()){
            $this->addCondiments();
        }
    }

    abstract protected function brew();

    abstract protected function addCondiments();

    protected function boilWater()
    {
        echo 'Boiling Water' . PHP_EOL;
    }

    protected function pourInCup()
    {
        echo 'Pouring into cup' . PHP_EOL;
    }

    protected function customerWantsCondiments(): bool
    {
        return true;
    }
}