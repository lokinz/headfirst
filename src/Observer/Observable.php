<?php 

namespace Headfirst\Observer;
use Headfirst\Observer\Observer;

class Observable implements Subject
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

    public function setChanged(): void
    {
        $this->changed = true;
    }

    public function notifyObservers($data = null): void
    {
        if (!$this->changed){
            return;
        }

        foreach ($this->observers as $observer){
            $observer->update($this, $data);
        }
        $this->changed = false;
    }
}
