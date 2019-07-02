<?php


namespace Headfirst\Composite;


use BadMethodCallException;

class Waitress
{
    protected $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu(): void
    {
        $this->allMenus->print();
    }

    public function printVegetarianMenu():void
    {
        $iterator = $this->allMenus->createIterator();

        echo PHP_EOL . 'VEGETARIAN MENU' . PHP_EOL . '----------------';
        while ($iterator->hasNext()){
            /** @var MenuComponent $menuComponent */
            $menuComponent = $iterator->next();
            try{
                if($menuComponent->isVegetarian()){
                    echo PHP_EOL;
                    $menuComponent->print();

                }
            } catch (BadMethodCallException $e) {}

        }

    }
}