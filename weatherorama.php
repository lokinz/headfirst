Weather-O-Rama

<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Observer\WeatherData;
use Headfirst\Observer\CurrentConditionsDisplay;
use Headfirst\Observer\ForecastDisplay;

$weatherData = new WeatherData;

$currentDisplay = new CurrentConditionsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);

$weatherData->setMeasurments(15, 65, 30.4);
echo PHP_EOL;
$weatherData->setMeasurments(25, 40, 30.4);
echo PHP_EOL;
$weatherData->setMeasurments(21, 90, 29.4);

?>

</pre>