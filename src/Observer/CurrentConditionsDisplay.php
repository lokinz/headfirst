<?php
namespace Headfirst\Observer;

use Headfirst\Observer\Observer;
use Headfirst\Observer\DisplayElement;
use Headfirst\Observer\Observable;
use Headfirst\Observer\WeatherData;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(Observable $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(Observable $ob): void
    {
        if(!$ob instanceOf WeatherData){
            return;
        }
        /** @var WeatherData $ob */
        $this->temperature = $ob->getTemperature();
        $this->humidity = $ob->getHumidity();
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: {$this->temperature}F and {$this->humidity}% humidity." . PHP_EOL;
    }
}