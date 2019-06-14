<?php

namespace Headfirst\Observer;

use Headfirst\Observer\Observer;
use Headfirst\Observer\DisplayElement;
use Headfirst\Observer\Subject;

class HeatindexDisplay implements Observer, DisplayElement
{
    private $heatIndex;
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
        $this->heatIndex = $this->computeHeatIndex($temp, $humidity);
        $this->display();
    }

    public function display(): void
    {
        echo "Heat Index: {$this->heatIndex}" . PHP_EOL;
    }

    private function computeHeatIndex(float $t, float $rh): float 
    {
        $index = (float)((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) +
            (0.00941695 * ($t * $t)) + (0.00728898 * ($rh * $rh)) +
            (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh * $rh)) +
            (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 *  
            ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) +
            (0.000000197483 * ($t * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) +     
            0.000000000843296 * ($t * $t * $rh * $rh * $rh)) -
            (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
        return $index;
    }

}