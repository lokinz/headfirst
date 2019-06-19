<?php

namespace Headfirst\Duck;

class FlyNoWay implements FlyBehavior {
    public function fly(): void {
        echo 'I Can\'t Fly!' . PHP_EOL;
    }
}