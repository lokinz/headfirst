<?php


namespace Headfirst\Command;


class CeilingFanOffCommand extends CeilingFanCommand
{
    public function execute(): void
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->off();
    }
}