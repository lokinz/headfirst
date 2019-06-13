<?php
namespace Headfirst\Duck;

class FlyRocketForward implements FlyBehavior {
    public function fly(): void {
        echo 'I\'m Flying with a rocket!' . PHP_EOL;
    }
}