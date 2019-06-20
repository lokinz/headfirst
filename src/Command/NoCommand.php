<?php


namespace Headfirst\Command;


class NoCommand implements Command
{

    public function execute(): void
    {
        echo 'NO COMMAND SET';
    }
}