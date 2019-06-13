<?php
namespace Headfirst\Duck;

class MuteQuack implements QuackBehavior {
    public function quack(): void {
        echo '<< silence >>' . PHP_EOL;
    }
}