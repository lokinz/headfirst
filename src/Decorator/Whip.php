<?php
namespace Headfirst\Decorator;
use Headfirst\Decorator\Beverage;
use Headfirst\Decorator\CondimentDecorator;

class Whip extends CondimentDecorator
{
    protected $beverage;

    public function __construct(Beverage $b)
    {
        $this->beverage = $b;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.10;
    }
}