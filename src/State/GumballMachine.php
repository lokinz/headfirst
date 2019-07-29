<?php


namespace Headfirst\State;


class GumballMachine
{
    public const SOLD_OUT = 0;
    public const NO_QUARTER = 1;
    public const HAS_QUARTER = 2;
    public const SOLD = 3;

    /** @var int $state */
    private $state = self::SOLD_OUT;
    /** @var int $count */
    private $count = 0;

    public function __construct(int $count)
    {
        $this->count = $count;
        if($count > 0){
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter(): void
    {
        switch ($this->state){
            case self::HAS_QUARTER:
                echo 'You can\'t insert another quarter.' . PHP_EOL;
                break;
            case self::NO_QUARTER:
                $this->state = self::HAS_QUARTER;
                echo 'You inserted a quarter' . PHP_EOL;
                break;
            case self::SOLD_OUT:
                echo 'You can\'t insert a quarter, the machine has sold out' . PHP_EOL;
                break;
            case self::SOLD:
                echo 'Please wait, we\'re already giving you a gumball' . PHP_EOL;
        }
    }

    public function ejectQuarter(): void
    {
        switch ($this->state){
            case self::HAS_QUARTER:
                echo 'Quarter returned' . PHP_EOL;
                $this->state = self::NO_QUARTER;
                break;
            case self::SOLD_OUT:
            case self::NO_QUARTER:
                echo 'You haven\'t inserted a quarter' . PHP_EOL;
                break;
            case self::SOLD:
                echo 'Sorry, you already turned the crank!' . PHP_EOL;
        }
    }

    public function turnCrank(): void
    {
        switch ($this->state){
            case self::HAS_QUARTER:
                echo 'You turned...' . PHP_EOL;
                $this->state = self::SOLD;
                $this->dispense();
                break;
            case self::NO_QUARTER:
                echo 'You turned but there is no quarter' . PHP_EOL;
                break;
            case self::SOLD_OUT:
                echo 'You turned but there are no gumballs' . PHP_EOL;
                break;
            case self::SOLD:
                echo 'Turning twice doesn\'t get you any more gumballs' . PHP_EOL;
        }
    }

    public function dispense(): void
    {
        switch ($this->state){
            case self::SOLD_OUT:
            case self::HAS_QUARTER:
                echo 'No gumball dispensed' . PHP_EOL;
                break;
            case self::NO_QUARTER:
                echo 'You need to pay first' . PHP_EOL;
                break;
            case self::SOLD:
                echo 'A gumball comes rolling out of the slot' . PHP_EOL;
                $this->count--;
                if($this->count === 0){
                    echo 'Oops, out of gumballs!' . PHP_EOL;
                    $this->state = self::SOLD_OUT;
                } else {
                    $this->state = self::NO_QUARTER;
                }
        }
    }

    public function __toString(): string
    {
        $output = 'Mighty Gumball, Inc.' . PHP_EOL;
        $output .= "Inventory: {$this->count} gumballs." . PHP_EOL;
        $output .= 'Machine ';
        switch ($this->state){
            case self::HAS_QUARTER:
                $output .= 'has a quarter.';
                break;
            case self::NO_QUARTER:
                $output .= 'is waiting for a quarter.';
                break;
            case self::SOLD_OUT:
                $output .= 'has sold out.';
                break;
            case self::SOLD:
                $output .= 'is giving a gumball.';
        }

        return $output;
    }
}