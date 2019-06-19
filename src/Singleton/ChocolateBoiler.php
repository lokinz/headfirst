<?php

namespace Headfirst\Singleton;

class ChocolateBoiler {
    protected $empty;
    protected $boiled;
    protected static $instance;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance(): ChocolateBoiler
    {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function fill(): void
    {
        if($this->empty){
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function drain(): void 
    {
        if(!$this->empty && $this->boiled){
            $this->empty = true;
        }
    }

    public function boil(): void
    {
        if(!$this->boiled && !$this->empty){
            $this->boiled = true;
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }


    
}