<?php
namespace Headfirst\Duck;

class Quack implements QuackBehavior {
    public function quack(): void {
        echo 'Quack' . PHP_EOL;
    }
}
