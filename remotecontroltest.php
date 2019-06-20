Remote Control Test

Simple Remote:
<pre>

<?php
require_once 'bootstrap.php';

use Headfirst\Command\LightOffCommand;
use Headfirst\Command\RemoteControl;
use Headfirst\Command\SimpleRemoteControl;
use Headfirst\Command\LightOnCommand;
use Headfirst\Command\Light;
use Headfirst\Command\GarageDoorUpCommand;
use Headfirst\Command\GarageDoor;

$remote = new SimpleRemoteControl;
$lightOnCommand = new LightOnCommand(new Light(''));
$garageDoorUpCommand = new GarageDoorUpCommand(new GarageDoor(''));

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
    $livingRoomLight = new Light('Living Room');
    $kitchenLight = new Light('Kitchen');

    $remote->setCommand(0, new LightOnCommand($livingRoomLight), new LightOffCommand($livingRoomLight));
    $remote->setCommand(1, new LightOnCommand($kitchenLight), new LightOffCommand($kitchenLight));

    echo $remote;
    echo PHP_EOL;

    $remote->onButtonWasPushed(0);
    $remote->offButtonWasPushed(0);
    $remote->onButtonWasPushed(1);
    $remote->offButtonWasPushed(1);
?>
</pre>