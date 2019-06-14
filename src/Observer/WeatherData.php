<?php
namespace Headfirst\Observer;
use Headfirst\Observer\Observable; 

class WeatherData extends Observable
{
    private $temperature;
    private $humidity;
    private $pressure;

    public function measumentsChanged(): void 
    {
        $this->setChanged();
        $this->notifyObservers();
    }

    public function setMeasurments(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measumentsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}