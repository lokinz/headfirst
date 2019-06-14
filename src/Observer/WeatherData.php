<?php
namespace Headfirst\Observer;
use Headfirst\Observer\Observer;

class WeatherData implements Subject
{
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct ()
    {
        $this->observers = [];
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

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer){
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measumentsChanged(): void 
    {
        $this->notifyObservers();
    }

    public function setMeasurments(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measumentsChanged();
    }
}