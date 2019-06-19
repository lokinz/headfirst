Chocolate Factory
<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Singleton\ChocolateBoiler;

$boiler = ChocolateBoiler::getInstance();

echo 'Boiler is ' . ($boiler->isEmpty() ? 'empty' : 'full');
echo PHP_EOL;
$boiler->fill();
echo 'Boiler is ' . ($boiler->isEmpty() ? 'empty' : 'full');
echo PHP_EOL;


$boiler2 = ChocolateBoiler::getInstance();
echo 'Boiler2 is ' . ($boiler2->isEmpty() ? 'empty' : 'full');



?>

</pre>