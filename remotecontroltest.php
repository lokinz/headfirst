Remote Control Test
<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Command\SimpleRemoteControl;
use Headfirst\Command\LightOnCommand;
use Headfirst\Command\Light;
use Headfirst\Command\GarageDoorUpCommand;
use Headfirst\Command\GarageDoor;

$remote = new SimpleRemoteControl;
$lightOnCommand = new LightOnCommand(new Light);
$garageDoorUpcommand = new GarageDoorUpCommand(new GarageDoor);

$remote->setCommand($lightOnCommand);
$remote->buttonWasPressed();
echo PHP_EOL;
$remote->setCommand($garageDoorUpcommand);
$remote->buttonWasPressed();



?>

</pre>