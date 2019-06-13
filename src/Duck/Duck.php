<?php

namespace Headfirst\Duck;

abstract class Duck {
    /** @var FlyBehavior $flyBehavior */
    protected $flyBehavior;
    /** @var QuackBehavior $quackBehavior */
    protected $quackBehavior;

    public abstract function display(): void;

    public function performFly(): void {
        $this->flyBehavior->fly();
    }

    public function perfomQuack(): void {
        $this->quackBehavior->quack();
    }

    public function swim(): void {
        echo 'All ducks float, even decoys!' . PHP_EOL;
    }

}