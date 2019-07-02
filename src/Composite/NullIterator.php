<?php


namespace Headfirst\Composite;


class NullIterator implements IteratorInterface
{

    public function hasNext(): bool
    {
        return false;
    }

    public function next()
    {
        return null;
    }
}