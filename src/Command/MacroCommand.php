<?php


namespace Headfirst\Command;


class MacroCommand implements Command
{
    /** @var Command[] $commands */
    protected $commands;

    public function __construct(Command ...$commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command){
            $command->execute();
        }
    }

    public function undo(): void
    {
        foreach (array_reverse($this->commands) as $command){
            $command->undo();
        }
    }
}