<?php

namespace Headfirst\Command;

class GarageDoor 
{
    protected $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function up(): void
    {
        echo "{$this->location} Garage Door Up";
    }

    public function down(): void
    {
        echo "{$this->location} Garage Door Down";
    }


}