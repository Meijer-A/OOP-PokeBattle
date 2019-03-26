<?php

class Charmeleon extends Pokemon {

    public function __construct($name)
    {
        parent::__construct(
            $name,
            EnergyType::FIRE,
            60,
            [
                "Head Butt" => new Attack("Head Butt", 10), 
                "Flare" => new Attack("Flare", 10)
            ],
            [new Weakness(EnergyType::WATER, 2)],
            [new Resistance(EnergyType::ELECTRIC, 10)]
        );
    }
}