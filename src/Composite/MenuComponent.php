<?php


namespace Headfirst\Composite;


use BadMethodCallException;

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new BadMethodCallException();
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new BadMethodCallException();
    }

    public function getChild(int $i): MenuComponent
    {
        throw new BadMethodCallException();
    }

    public function getName(): string
    {
        throw new BadMethodCallException();
    }

    public function getDescription(): string
    {
        throw new BadMethodCallException();
    }

    public function getPrice(): float
    {
        throw new BadMethodCallException();
    }

    public function isVegetarian(): bool
    {
        throw new BadMethodCallException();
    }

    public function print(): void
    {
        throw new BadMethodCallException();
    }

    abstract public function createIterator(): IteratorInterface;
}