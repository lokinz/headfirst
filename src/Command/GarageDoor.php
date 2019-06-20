<?php

namespace Headfirst\Command;

class GarageDoor 
{
    public function up(): void 
    {
        echo 'Door Up';
    }

    public function down(): void
    {
        echo 'Door Down';
    }


}