<?php


namespace Headfirst\Template;


class Coffee extends CaffeineBeverage
{

    protected function brew(): void
    {
        echo 'Dripping coffee through filter' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding Sugar and Soy Milk' . PHP_EOL;
    }
}