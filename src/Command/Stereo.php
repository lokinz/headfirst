<?php


namespace Headfirst\Command;


class Stereo
{
    protected $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on(){
        echo $this->location . ' Stereo On' . PHP_EOL;
    }

    public function off()
    {
        echo $this->location . ' Stereo Off' . PHP_EOL;
    }

    public function setCd()
    {
        echo $this->location . ' Stereo Set to CD' . PHP_EOL;
    }

    public function setVolume(int $volume)
    {
        echo $this->location . ' Stereo Volume set to ' . $volume . PHP_EOL;
    }
}