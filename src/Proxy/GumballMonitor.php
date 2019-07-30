<?php


namespace Headfirst\Proxy;


use Headfirst\State\GumballMachine;

class GumballMonitor
{
    protected $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function report(): void
    {
        echo "Gumball Machine: {$this->machine->getLocation()}" . PHP_EOL;
        echo "Current Inventory: {$this->machine->getCount()} gumballs" . PHP_EOL;
        echo "Current State: {$this->machine->getState()}" . PHP_EOL;
    }
}