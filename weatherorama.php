Weather-O-Rama

<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Observer\WeatherData;
use Headfirst\Observer\CurrentConditionsDisplay;
use Headfirst\Observer\ForecastDisplay;
use Headfirst\Observer\HeatindexDisplay;
use Headfirst\Observer\StatisticsDisplay;

$weatherData = new WeatherData;

$currentDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);
$heatIndex = new HeatindexDisplay($weatherData);

$weatherData->setMeasurments(80, 65, 30.4);
echo PHP_EOL;
$weatherData->setMeasurments(82, 70, 29.2);
echo PHP_EOL;
$weatherData->setMeasurments(78, 90, 29.2);

?>

</pre>