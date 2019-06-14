<?php
namespace Headfirst\Observer;

use Headfirst\Observer\Observer;
use Headfirst\Observer\DisplayElement;
use Headfirst\Observer\Subject;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    /** @var Subject $weatherData */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: {$this->temperature} C and {$this->humidity}% humidity." . PHP_EOL;
    }
}