<?php


namespace Headfirst\Command;


abstract class CeilingFanCommand implements Command
{
    protected $fan;
    protected $prevSpeed;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case CeilingFan::LOW:
                $this->fan->low();
                break;
            case CeilingFan::MEDIUM:
                $this->fan->medium();
                break;
            case CeilingFan::HIGH:
                $this->fan->high();
                break;
            case CeilingFan::OFF:
            default:
                $this->fan->off();
        }
    }
}