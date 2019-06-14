<?php
namespace Headfirst\Observer;

interface Observer {
    public function update(Observable $ob): void;
}