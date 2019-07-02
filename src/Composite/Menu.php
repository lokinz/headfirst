<?php


namespace Headfirst\Composite;


class Menu extends MenuComponent
{
    /** @var MenuComponent[] $menuComponents */
    protected $menuComponents;
    protected $name;
    protected $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $i = array_search($menuComponent, $this->menuComponents);
        if($i !== false){
            unset($this->menuComponents[$i]);
        }
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print(): void
    {
        echo PHP_EOL . $this->getName() . ', ' . $this->getDescription() . PHP_EOL;
        echo '----------------' . PHP_EOL;

        foreach ($this->menuComponents as $menuComponent){
            $menuComponent->print();
        }
    }
}