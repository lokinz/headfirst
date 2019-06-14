<?php 

namespace Headfirst\Observer;
use Headfirst\Observer\Observer;

abstract class Observable implements Subject
{
    private $observers;
    private $changed;

    public function __construct ()
    {
        $this->observers = [];
        $this->changed = false;
    }

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;   
    }

    public function removeObserver(Observer $o): void
    {
        if($key = array_search($o, $this->observers) !== false){
            unset($this->observers[$key]);
        }
    }

    protected function setChanged(): void
    {
        $this->changed = true;
    }

    public function notifyObservers(): void
    {
        if (!$this->changed){
            return;
        }

        foreach ($this->observers as $observer){
            $observer->update($this);
        }
        $this->changed = false;
    }
}
