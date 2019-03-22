<?php

class Pokemon {
    
    public $name;
    public $energyType; 
    public $hitPoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name)
    {
        $this->name = $name;
    }

}