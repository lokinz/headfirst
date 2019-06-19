Starbuzz Coffee 

<pre>

<?php
require_once 'bootstrap.php';

use Headfirst\Decorator\Espresso;
use Headfirst\Decorator\DarkRoast;
use Headfirst\Decorator\Mocha;
use Headfirst\Decorator\Whip;
use Headfirst\Decorator\HouseBlend;
use Headfirst\Decorator\Soy;

$display = function($o){
    echo $o->getDescription() . " $" . $o->cost() . PHP_EOL;
};


$beverage = new Espresso;
$display($beverage);
echo PHP_EOL;

$beverage2 = new DarkRoast;
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
$display($beverage2);
echo PHP_EOL;

$beverage3 = new HouseBlend;
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
$display($beverage3);

?>

</pre>