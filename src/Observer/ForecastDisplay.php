<?php
namespace Headfirst\Observer;

use Headfirst\Observer\Observer;
use Headfirst\Observer\DisplayElement;
use Headfirst\Observer\Subject;

class ForecastDisplay implements Observer, DisplayElement
{
    private $pressure = 29.2;
    private $lastPressure;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $weatherData->registerObserver($this);
        $this->weatherData = $weatherData;
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->pressure;
        $this->pressure = $pressure;

        $this->display();
    }

    public function display(): void
    {
        echo 'Forecast: ';
        if($this->pressure > $this->lastPressure){
            echo 'Improving weather on the way!';
        }
        if($this->pressure == $this->lastPressure){
            echo 'More of the same.';
        }
        if($this->pressure < $this->lastPressure){
            echo 'Watch out for cooler, rainy weather.';
        }
        echo PHP_EOL;
    }


}