Mighty Gumball
<pre>

<?php

use Headfirst\State\GumballMachine;
require_once 'bootstrap.php';

$gumballMachine = new GumballMachine(5);

echo $gumballMachine . PHP_EOL;

echo PHP_EOL;
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo PHP_EOL;
echo $gumballMachine . PHP_EOL;

echo PHP_EOL;
$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();

echo PHP_EOL;
echo $gumballMachine . PHP_EOL;

echo PHP_EOL;
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->ejectQuarter();

echo PHP_EOL;
echo $gumballMachine . PHP_EOL;

echo PHP_EOL;
$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->refill(5);
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo PHP_EOL;
echo $gumballMachine . PHP_EOL;

?>

</pre>
