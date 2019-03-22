<?php 

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$henk = new Pikachu("henk");
$peter = new Charmeleon("peter");

echo $peter->getHealth();
$henk->attackPokemon($peter, $henk->attacks["Electric Ring"]);
echo $peter->name . " has been attackattacked <br>";
echo $peter->getHealth();

echo $henk->getHealth();
$peter->attackPokemon($henk, $peter->attacks["Flare"]);
echo $henk->name . " has been attackattacked <br>";
echo $henk->getHealth();  