<?php
namespace Headfirst\Decorator;
use Headfirst\Decorator\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost(): float
    {
        return 0.89;
    }
}