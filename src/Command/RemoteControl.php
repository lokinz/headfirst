<?php


namespace Headfirst\Command;


use ReflectionClass;

class RemoteControl
{
    /** @var Command[] $onCommands */
    protected $onCommands;
    /** @var Command[] $offCommands */
    protected $offCommands;

    public function __construct()
    {
        $command = new NoCommand;

        for ($i=0; $i<7; $i++){
            $this->onCommands[$i] = $command;
            $this->offCommands[$i] = $command;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }

    public function __toString()
    {
        $return = PHP_EOL . '----- Remote Control ----' . PHP_EOL;
        /** @var Command $onCommand */
        foreach ($this->onCommands as $i => $onCommand){
            $return .= "[slot {$i}] " . (new ReflectionClass($onCommand))->getShortName() . "\t\t"
                . (new ReflectionClass($this->offCommands[$i]))->getShortName() . PHP_EOL;
        }

        return $return;
    }
}