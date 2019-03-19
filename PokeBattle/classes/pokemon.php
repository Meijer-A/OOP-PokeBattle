<?php

class Pokemon {
    
    public $name;
    public $hitPoints = string;
    public $health = string;

    public function __construct($name, $hitPoints, $health)
    {
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->health = $health;
    }

}