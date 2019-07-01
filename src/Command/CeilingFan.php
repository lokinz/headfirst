<?php


namespace Headfirst\Command;


class CeilingFan
{
    protected $location;
    protected $speed = self::OFF;
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function high():void
    {
        $this->speed = self::HIGH;
        echo $this->location . ' Ceiling Fan on high' . PHP_EOL;
    }

    public function medium():void
    {
        $this->speed = self::MEDIUM;
        echo $this->location . ' Ceiling Fan on medium' . PHP_EOL;
    }

    public function low():void
    {
        $this->speed = self::LOW;
        echo $this->location . ' Ceiling Fan on low' . PHP_EOL;
    }
    public function off(): void
    {
        $this->speed = self::OFF;
        echo $this->location . ' Ceiling Fan off' . PHP_EOL;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

}