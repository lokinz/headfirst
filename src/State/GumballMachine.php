<?php


namespace Headfirst\State;


class GumballMachine implements State
{
    /** @var State $soldOutState */
    protected $soldOutState;
    /** @var State $noQuarterState */
    protected $noQuarterState;
    /** @var State $hasQuarterState */
    protected $hasQuarterState;
    /** @var State $soldState */
    protected $soldState;
    /** @var State $winnerState */
    protected $winnerState;

    /** @var int $state */
    private $state;
    /** @var int $count */
    private $count = 0;

    public function __construct(int $count)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->count = $count;
        if($count > 0){
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function dispense(): void
    {
        $this->state->dispense();
    }

    public function __toString(): string
    {
        $output = 'Mighty Gumball, Inc.' . PHP_EOL;
        $output .= "Inventory: {$this->count} gumballs." . PHP_EOL;
        $output .= "Machine is {$this->state}";

        return $output;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function releaseBall(): void
    {
        echo 'A gumball comes rolling out the slot...' . PHP_EOL;
        if($this->count !== 0){
            $this->count--;
        }
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }

    public function refill(int $count){
        echo "Adding {$count} gumballs to the machine." . PHP_EOL;
        $this->count += $count;
        if($this->count > 0){
            $this->setState($this->getNoQuarterState());
        }
    }


}