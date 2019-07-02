<?php


namespace Headfirst\Composite;


class MenuComponentsIterator implements IteratorInterface
{
    protected $menuComponents;
    protected $index = 0;

    public function __construct(array $menuComponents)
    {
        $this->menuComponents = $menuComponents;
    }

    public function hasNext(): bool
    {
        return $this->index < count($this->menuComponents);
    }

    public function next()
    {
        $i = $this->index;
        $this->index++;
        return $this->menuComponents[$i];
    }
}