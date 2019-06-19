Remote Control Test
<pre>

<?php
require_once 'bootstrap.php';
use Headfirst\Command\SimpleRemoteControl;
use Headfirst\Command\LightOnCommand;
use Headfirst\Command\Light;

$remote = new SimpleRemoteControl;
$command = new LightOnCommand(new Light);
$remote->setCommand($command);

$remote->buttonWasPressed();
echo PHP_EOL;

?>

</pre>