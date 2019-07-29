<?php

namespace Headfirst\State;

interface State
{
    public function insertQuarter(): void;

    public function ejectQuarter(): void;

    public function turnCrank(): void;

    public function dispense(): void;
}