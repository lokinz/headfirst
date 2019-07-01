<?php


namespace Headfirst\Command;


class StereoWithCDCommand implements Command
{
    protected $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }

    public function undo(): void
    {
       $this->stereo->off();
    }
}