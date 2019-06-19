<?php

namespace Headfirst\Command;

class SimpleRemoteControl
{
    /** @var Command $slot */
    protected $slot;

    public function setCommand(Command $command): void 
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}