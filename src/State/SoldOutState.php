<?php


namespace Headfirst\State;


class SoldOutState implements State
{
    /** @var GumballMachine $gumballMachine */
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo 'You can\'t insert a quarter, the machine has sold out' . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo 'You haven\'t inserted a quarter' . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo 'You turned but there are no gumballs' . PHP_EOL;
    }

    public function dispense(): void
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }

    public function __toString()
    {
        return 'sold out.';
    }
}