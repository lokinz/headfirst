Pizza Store
<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Factory\NYPizzaStore;
use Headfirst\Factory\ChicagoPizzaStore;

$nyStore = new NYPizzaStore;
$chicagoStore = new ChicagoPizzaStore;

$pizza = $nyStore->orderPizza('cheese');
echo "Ethan ordered a {$pizza->getName()}" . PHP_EOL;

echo PHP_EOL;

$pizza = $chicagoStore->orderPizza('cheese');
echo "Joel ordered a {$pizza->getName()}" . PHP_EOL;


?>

</pre>