<?php


namespace Headfirst\Composite;


class MenuItem extends MenuComponent
{
    protected $name;
    protected $description;
    protected $vegetarian;
    protected $price;
    protected $iterator;

    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function print(): void
    {
        echo ' ' . $this->getName();
        if($this->isVegetarian()){
            echo ' (v)';
        }
        echo ', $' . $this->getPrice();
        echo PHP_EOL . '    -- ' . $this->getDescription() . PHP_EOL;
    }

    public function createIterator(): IteratorInterface
    {
        if(is_null($this->iterator)){
            $this->iterator = new NullIterator;
        }
        return $this->iterator;
    }
}