<?php


namespace Headfirst\Command;


class CeilingFan
{
    protected $location;
    protected $level = 0;
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function high():void
    {
        $this->level = self::HIGH;
        echo $this->location . ' Ceiling Fan on high' . PHP_EOL;
    }

    public function medium():void
    {
        $this->level = self::MEDIUM;
        echo $this->location . ' Ceiling Fan on medium' . PHP_EOL;
    }

    public function low():void
    {
        $this->level = self::LOW;
        echo $this->location . ' Ceiling Fan on low' . PHP_EOL;
    }
    public function off(): void
    {
        $this->level = 0;
        echo $this->location . ' Ceiling Fan off' . PHP_EOL;
    }

    public function getSpeed(): int
    {
        return $this->level;
    }

}