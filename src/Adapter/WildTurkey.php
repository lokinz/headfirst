<?php


namespace Headfirst\Adapter;


class WildTurkey implements Turkey
{

    public function gobble(): void
    {
        echo 'Gobble gobble' . PHP_EOL;
    }

    public function fly(): void
    {
        echo 'I\'m flying a short distance' . PHP_EOL;
    }
}