<?php


namespace Headfirst\Command;


class CeilingFanMediumCommand extends CeilingFanCommand
{
    public function execute(): void
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->medium();
    }
}