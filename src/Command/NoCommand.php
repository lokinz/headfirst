<?php


namespace Headfirst\Command;


class NoCommand implements Command
{

    public function execute(): void
    {
    }

    public function undo(): void
    {
        // TODO: Implement undo() method.
    }
}