<?php


namespace Headfirst\Adapter;


class MallardDuck implements Duck
{

    public function quack(): void
    {
        echo 'Quack' . PHP_EOL;
    }

    public function fly(): void
    {
        echo 'I\'m Flying' .PHP_EOL;
    }
}