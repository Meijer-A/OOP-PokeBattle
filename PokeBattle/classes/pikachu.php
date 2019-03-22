<?php

class Pikachu extends Pokemon {

    public function __construct($name)
    {
        parent::__construct(
            $name,
            "Lightning",
            60,
            [
                "Electric Ring" => new Attack("Electric Ring", 50),
                "Pika Punch" => new Attack("Pika Punch", 20)
            ],
            [ new Weakness("Fire", 1.5) ],
            [ new Resistance("Fighting", 20) ]
        );
    }

}