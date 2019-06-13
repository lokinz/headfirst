<?php

namespace Headfirst\Duck;

class MallardDuck extends Duck{

    public function __construct()
    {
        $this->quackBehavior = new Quack;
        $this->flyBehavior = new FlyWithWings;
    }

    public function display(): void {
        echo 'I\'m a real Mallard Duck!' . PHP_EOL;
    }
}