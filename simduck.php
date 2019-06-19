Duck Simulator
<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Duck\MallardDuck;
use Headfirst\Duck\ModelDuck;
use Headfirst\Duck\FlyRocketForward;

$mallard = new MallardDuck;

$mallard->display();
$mallard->perfomQuack();
$mallard->performFly();

echo PHP_EOL;

$model = new ModelDuck;
$model->display();
$model->performFly();
$model->setFlyBehavior(new FlyRocketForward);
$model->performFly();

?>

</pre>