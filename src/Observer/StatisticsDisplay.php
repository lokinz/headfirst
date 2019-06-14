<?php
namespace Headfirst\Observer;

use Headfirst\Observer\Observer;
use Headfirst\Observer\DisplayElement;
use Headfirst\Observer\Subject;

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp = 0.0;
    private $minTemp = 200;
    private $tempSum = 0.0;
    private $numReadings = 0;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $weatherData->registerObserver($this);
        $this->weatherData = $weatherData;
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->tempSum += $temp;
        $this->numReadings++;
        $this->maxTemp = max($this->maxTemp, $temp);
        $this->minTemp = min($this->minTemp, $temp);

        $this->display();
    }

    public function display(): void
    {
        echo "Avg/Max/Min temperature = " . $this->tempSum / $this->numReadings . "/";
        echo $this->maxTemp . "/" . $this->minTemp;
        echo PHP_EOL;
    }


}