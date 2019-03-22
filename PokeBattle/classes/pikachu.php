<?php

class Pikachu extends Pokemon{

    public $energyType = "Lightning"; 
    public $hitPoints = 60;
    public $health = 60;
    public $attacks = [ new Attack("Electric Ring", 50), new Attack("Pika Punch", 20) ];
    public $weakness = [ new Weakness("Fire", 1.5) ];
    public $resistance = [ new Resistance("Fighting", 20) ];
}