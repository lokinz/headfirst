<?php


namespace Headfirst\Template;


class Tea extends CaffeineBeverage
{

    protected function brew(): void
    {
        echo 'Steeping the tea' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding Lemon' . PHP_EOL;
    }
}