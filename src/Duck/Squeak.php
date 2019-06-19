<?php

namespace Headfirst\Duck;

class Squeak implements QuackBehavior{
    public function quack(): void {
        echo 'Squeak' . PHP_EOL;
    }
}