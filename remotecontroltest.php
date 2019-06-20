Remote Control Test

Simple Remote:
<pre>

<?php
require_once 'bootstrap.php';

use Headfirst\Command\RemoteControl;
use Headfirst\Command\SimpleRemoteControl;
use Headfirst\Command\LightOnCommand;
use Headfirst\Command\Light;
use Headfirst\Command\GarageDoorUpCommand;
use Headfirst\Command\GarageDoor;

$remote = new SimpleRemoteControl;
$lightOnCommand = new LightOnCommand(new Light);
$garageDoorUpCommand = new GarageDoorUpCommand(new GarageDoor);

$remote->setCommand($lightOnCommand);
$remote->buttonWasPressed();
echo PHP_EOL;
$remote->setCommand($garageDoorUpCommand);
$remote->buttonWasPressed();
?>
</pre>
<hr>
Full Remote
<pre>
<?php
    $remote = new RemoteControl;
    echo $remote;
?>
</pre>