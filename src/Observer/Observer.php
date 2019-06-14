<?php
namespace Headfirst\Observer;

interface Observer {
    public function update(float $temp, float $humidity, float $pressure): void;
}