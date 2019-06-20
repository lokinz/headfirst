<?php

namespace Headfirst\Command;

class Light {
    protected $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo $this->location . ' light turned on' . PHP_EOL;
    }

    public function off()
    {
        echo $this->location . ' light turned off' . PHP_EOL;
    }
}