<?php

class Charmelion extends Pokemon{
    
    public $energyType = "Fire"; 
    public $hitPoints = 60;
    public $health = 60;
    public $attacks = [ new Attack("Head Butt", 10), new Attack("Flare", 10) ];
    public $weakness = [ new Weakness("Water", 2) ];
    public $resistance = [ new Resistance("Lightning", 10) ];
}