<?php

class Pokemon {
    
    public $name;
    // public energyType = string;
    // public hitPoints = string;
    // public health = string;
    // public attacks = attackMove;
    // public resistance = string;

    public $attack = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attack()
    {
        $this->attack = true; 
    }
}


$pokemon = new pokemon('BBOOOMMM');

$pokemon->attack();

var_dump($pokemon->attack);