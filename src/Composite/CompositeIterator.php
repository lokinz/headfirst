<?php


namespace Headfirst\Composite;


use SplStack;

class CompositeIterator implements IteratorInterface
{
    /** @var SplStack $stack */
    protected $stack;

    public function __construct(IteratorInterface $iterator)
    {
        $this->stack = new SplStack();
        $this->stack->push($iterator);
    }

    public function hasNext(): bool
    {
        if($this->stack->isEmpty()){
            return false;
        }

        /** @var IteratorInterface $iterator */
        $iterator = $this->stack->top();
        if(!$iterator->hasNext()){
            $this->stack->pop();
            return $this->hasNext();
        }

        return true;
    }

    public function next()
    {
        if($this->hasNext()){
            /** @var MenuComponent $menuComponent */
            $iterator = $this->stack->top();
            $menuComponent = $iterator->next();

            $this->stack->push($menuComponent->createIterator());
            return $menuComponent;
        }
        return null;
    }
}