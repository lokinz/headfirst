<?php


namespace Headfirst\Command;


class CeilingFanOffCommand implements Command
{
    protected $fan;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute(): void
    {
        $this->fan->off();
    }
}