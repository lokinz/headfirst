Remote Control Test

Simple Remote:
<pre>

<?php
require_once 'bootstrap.php';

use Headfirst\Command\CeilingFan;
use Headfirst\Command\CeilingFanLowCommand;
use Headfirst\Command\CeilingFanMediumCommand;
use Headfirst\Command\CeilingFanOffCommand;
use Headfirst\Command\CeilingFanHighCommand;
use Headfirst\Command\HotTub;
use Headfirst\Command\HotTubOffCommand;
use Headfirst\Command\HotTunOnCommand;
use Headfirst\Command\LightOffCommand;
use Headfirst\Command\MacroCommand;
use Headfirst\Command\RemoteControl;
use Headfirst\Command\SimpleRemoteControl;
use Headfirst\Command\LightOnCommand;
use Headfirst\Command\Light;
use Headfirst\Command\GarageDoorUpCommand;
use Headfirst\Command\GarageDoor;
use Headfirst\Command\Stereo;
use Headfirst\Command\StereoOffCommand;
use Headfirst\Command\StereoWithCDCommand;

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
    $garageDoor = new GarageDoor('');
    $stereo = new Stereo('Living Room');
    $ceilingFan = new CeilingFan('Living Room');

    $remote->setCommand(0, new LightOnCommand($livingRoomLight), new LightOffCommand($livingRoomLight));
    $remote->setCommand(1, new LightOnCommand($kitchenLight), new LightOffCommand($kitchenLight));
    $remote->setCommand(2, new CeilingFanHighCommand($ceilingFan), new CeilingFanOffCommand($ceilingFan));
    $remote->setCommand(3, new StereoWithCDCommand($stereo), new StereoOffCommand($stereo));

    echo $remote;
    echo PHP_EOL;

    $remote->onButtonWasPushed(0);
    $remote->offButtonWasPushed(0);
    echo $remote . PHP_EOL;
    $remote->undoButtonWasPushed();
    $remote->onButtonWasPushed(1);
    echo $remote . PHP_EOL;
    $remote->offButtonWasPushed(1);
    $remote->onButtonWasPushed(2);
    $remote->offButtonWasPushed(2);
    $remote->onButtonWasPushed(3);
    $remote->offButtonWasPushed(3);
?>
</pre>
<hr>
Fan Levels
<pre>
<?php
$remote = new RemoteControl;
$ceilingFan = new CeilingFan('Living Room');
$remote->setCommand(0, new CeilingFanMediumCommand($ceilingFan), new CeilingFanOffCommand($ceilingFan));
$remote->setCommand(1, new CeilingFanHighCommand($ceilingFan), new CeilingFanOffCommand($ceilingFan));

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);
echo $remote . PHP_EOL;
$remote->undoButtonWasPushed();
$remote->onButtonWasPushed(1);
echo $remote . PHP_EOL;
$remote->undoButtonWasPushed();
?>
</pre>
<hr>
Macros
<pre>
<?php

$remote = new RemoteControl;
$light = new Light('Living Room');
$stereo = new Stereo('Living Room');
$ceilingFan = new CeilingFan('Living Room');
$hotTub = new HotTub;

$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);
$stereoOnCommand = new StereoWithCDCommand($stereo);
$stereoOffCommand = new StereoOffCommand($stereo);
$ceilingFanLowCommand = new CeilingFanLowCommand($ceilingFan);
$ceilingFanOffCommand = new CeilingFanOffCommand($ceilingFan);
$hotTubOnCommand = new HotTunOnCommand($hotTub);
$hotTubOffCommand = new HotTubOffCommand($hotTub);

$partyOnMacro = new MacroCommand($lightOnCommand, $stereoOnCommand, $ceilingFanLowCommand, $hotTubOnCommand);
$partOffMacro = new MacroCommand($lightOffCommand, $stereoOffCommand, $ceilingFanOffCommand, $hotTubOffCommand);

$remote->setCommand(0, $partyOnMacro, $partOffMacro);
$remote->onButtonWasPushed(0);
$remote->undoButtonWasPushed();


$remote->onButtonWasPushed(0);

$remote->offButtonWasPushed(0);

?>
</pre>