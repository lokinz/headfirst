<?php


namespace Headfirst\Command;


class HotTunOnCommand implements Command
{
    protected $hotTub;

    public function __construct(HotTub $hotTub)
    {
        $this->hotTub = $hotTub;
    }

    public function execute(): void
    {
        $this->hotTub->on();
    }

    public function undo(): void
    {
        $this->hotTub->off();
    }
}