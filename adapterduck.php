Adapter Duck
<pre>

<?php
require_once 'bootstrap.php';

use Headfirst\Adapter\Duck;
use Headfirst\Adapter\MallardDuck;
use Headfirst\Adapter\TurkeyAdapter;
use Headfirst\Adapter\WildTurkey;

function testDuck(Duck $duck){
    $duck->quack();
    $duck->fly();
}

$mallard = new MallardDuck;
$wildTurkey = new WildTurkey;
$turkeyAdapter = new TurkeyAdapter($wildTurkey);

echo 'The Turkey Says...' . PHP_EOL;
$wildTurkey->gobble();
$wildTurkey->fly();

echo PHP_EOL;

echo 'The Duck Says...' . PHP_EOL;
testDuck($mallard);
echo PHP_EOL;

echo 'The TurkeyAdapter Says...' . PHP_EOL;
testDuck($turkeyAdapter);

?>

</pre>