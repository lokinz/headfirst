<?php


namespace Headfirst\Template;


class CoffeeWithHook extends CaffeineBeverageWithHook
{

    protected function brew()
    {
        echo 'Dripping Coffee through filter' . PHP_EOL;
    }

    protected function addCondiments()
    {
        echo 'Adding sugar and soy milk' . PHP_EOL;
    }

    protected function customerWantsCondiments(): bool
    {
        $answer = $this->getUserInput();

        if(strtolower($answer)[0] === 'y'){
            return true;
        }
        return false;
    }

    protected function getUserInput()
    {
        echo 'Would you like milk and sugar?' . PHP_EOL;
        return fgets(STDIN);
    }
}