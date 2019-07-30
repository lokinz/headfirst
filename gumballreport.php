Gumball Report
<pre>
<?php

use Headfirst\Proxy\GumballMonitor;
use Headfirst\State\GumballMachine;

include_once 'bootstrap.php';

    $gumballMachine = new GumballMachine('New York', 10);

    $gumballMonitor = new GumballMonitor($gumballMachine);

    $gumballMonitor->report();
?>

</pre>

