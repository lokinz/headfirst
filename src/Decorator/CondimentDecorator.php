<?php
namespace Headfirst\Decorator;

use Headfirst\Decorator\Beverage;

abstract class CondimentDecorator extends Beverage
{
    // Java code example had this abstract but php complains that it's already implelmented in Beverage
    // abstract public function getDescription(): string;
}