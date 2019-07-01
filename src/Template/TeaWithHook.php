<?php


namespace Headfirst\Template;


class TeaWithHook extends CaffeineBeverageWithHook
{

    protected function brew(): void
    {
        echo 'Steeping the tea' . PHP_EOL;
    }

    protected function addCondiments(): void
    {
        echo 'Adding Lemon' . PHP_EOL;
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
        echo 'Would you like lemon?' . PHP_EOL;
        return fgets(STDIN);
    }
}