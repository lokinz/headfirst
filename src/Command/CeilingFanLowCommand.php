<?php


namespace Headfirst\Command;


class CeilingFanLowCommand extends CeilingFanCommand
{
    public function execute(): void
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->low();
    }
}