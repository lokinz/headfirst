<?php

namespace Headfirst\Command;
use Headfirst\Command\Command;

class GarageDoorUpCommand implements Command
{
    protected $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute(): void
    {
        $this->door->up();
    }

    public function undo(): void
    {
        // TODO: Implement undo() method.
    }
}