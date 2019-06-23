<?php


namespace Headfirst\Command;


use ReflectionClass;

class RemoteControl
{
    /** @var Command[] $onCommands */
    protected $onCommands;
    /** @var Command[] $offCommands */
    protected $offCommands;
    /** @var Command $undoCommand */
    protected $undoCommand;

    public function __construct()
    {
        $command = new NoCommand;

        for ($i=0; $i<7; $i++){
            $this->onCommands[$i] = $command;
            $this->offCommands[$i] = $command;
        }
        $this->undoCommand = $command;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    public function __toString()
    {
        $return = PHP_EOL . '----- Remote Control ----' . PHP_EOL;
        /** @var Command $onCommand */
        foreach ($this->onCommands as $i => $onCommand){
            $return .= "[slot {$i}] " . (new ReflectionClass($onCommand))->getShortName() . "\t\t"
                . (new ReflectionClass($this->offCommands[$i]))->getShortName() . PHP_EOL;
        }
        $return .= '[undo] ' . (new ReflectionClass($this->undoCommand))->getShortName() . PHP_EOL;

        return $return;
    }
}