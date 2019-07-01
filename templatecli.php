<?php

use Headfirst\Template\CoffeeWithHook;
use Headfirst\Template\TeaWithHook;

require_once 'bootstrap.php';

$coffeeWithHook = new CoffeeWithHook;
$coffeeWithHook->prepareRecipe();

echo PHP_EOL;

$teaWithHook = new TeaWithHook;
$teaWithHook->prepareRecipe();