<?php
namespace Headfirst\Decorator;
use Headfirst\Decorator\Beverage;
use Headfirst\Decorator\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    protected $beverage;

    public function __construct(Beverage $b)
    {
        $this->beverage = $b;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.20;
    }
}