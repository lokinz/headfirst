<?php


namespace Headfirst\Command;


class HotTubOffCommand implements Command
{
    protected $hotTub;

    public function __construct(HotTub $hotTub)
    {
        $this->hotTub = $hotTub;
    }

    public function execute(): void
    {
        $this->hotTub->off();
    }

    public function undo(): void
    {
        $this->hotTub->on();
    }
}