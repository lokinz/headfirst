<?php


namespace Headfirst\Command;


class CeilingFanOnCommand implements Command
{
    protected $fan;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute(): void
    {
        $this->fan->high();
    }
}