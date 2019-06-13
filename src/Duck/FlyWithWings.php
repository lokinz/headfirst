<?php

namespace Headfirst\Duck;

class FlyWithWings implements FlyBehavior{
    public function fly(): void {
        echo 'I\'m Flying' . PHP_EOL;
    }
}