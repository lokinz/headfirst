<?php


namespace Headfirst\State;


class HasQuarterState implements State
{
    /** @var GumballMachine $gumballMachine */
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo 'You can\'t insert another quarter' . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo 'Quarter returned' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo 'You turned...' . PHP_EOL;

        if (random_int(1, 10) === 10) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo 'No gumball dispensed.' . PHP_EOL;
    }

    public function __toString()
    {
        return 'waiting to dispense.';
    }
}