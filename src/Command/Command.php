<?php

namespace Headfirst\Command;

interface Command 
{
    public function execute(): void;
}