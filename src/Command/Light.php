<?php

namespace Headfirst\Command;

class Light {
    public function on()
    {
        echo 'Light turned on' . PHP_EOL;
    }

    public function off()
    {
        echo 'Light turned off' . PHP_EOL;
    }
}