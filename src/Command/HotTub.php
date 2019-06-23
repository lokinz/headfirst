<?php


namespace Headfirst\Command;


class HotTub
{
    public function on(): void
    {
        echo 'Hot Tub On' . PHP_EOL;

    }

    public function off(): void
    {
        echo 'Hot Tub Off' . PHP_EOL;
    }


}