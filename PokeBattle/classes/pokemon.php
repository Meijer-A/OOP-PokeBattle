<?php

class Pokemon {
    
    public $name;
    public $energyType; 
    public $hitPoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function attackPokemon($target, $attackMove)
    {
        $enemyWeakness = $target->weakness;
        $enemyResistance = $target->resistance;

        // check if the pokemon has a Weakness or resistance and change the damage if necessary
        if ($this->energyType === $enemyWeakness->energyType) {
            $damage = $attackMove->damage * $enemyWeakness->value;
            $target->health -= $damage;
        } elseif ($this->energyType === $enemyResistance->energyType) {
            $damage = $attackMove->damage - $enemyResistance->value;
            $target->health -= $damage;
        } else {
            $target->health -= $attackMove->damage;
        }
    }

    public function getHealth()
    {
        return $this->name . "'s health is " . $this->health . "<br>";
    }

}