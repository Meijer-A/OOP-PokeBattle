<?php

class Charmeleon extends Pokemon {

    public function __construct($name)
    {
        parent::__construct(
            $name,
            "Fire",
            60,
            [
                "Head Butt" => new Attack("Head Butt", 10), 
                "Flare" => new Attack("Flare", 10)
            ],
            [new Weakness("Water", 2)],
            [new Resistance("Lightning", 10)]
        );
    }
}