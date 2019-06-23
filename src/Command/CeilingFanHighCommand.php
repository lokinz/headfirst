<?php


namespace Headfirst\Command;


class CeilingFanHighCommand extends CeilingFanCommand
{
    public function execute(): void
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->high();
    }
}