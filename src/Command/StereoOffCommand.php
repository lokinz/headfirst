<?php


namespace Headfirst\Command;


class StereoOffCommand implements Command
{
    protected $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        // TODO: Implement undo() method.
    }
}