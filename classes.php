<?php

class SuperHero
{
    // propiedad y métodos
    // visibilidad
    public $name;
    public $powers;
    public $planet;
    public $level;

    public function __construct($name, $powers, $planet)
    {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }

    // constructor
    public function attack()
    {
        return "$this->name está atacando...";
    }

    public function description()
    {
        return "$this->name es del planeta $this->planet y tiene los poderes de $this->powers";
    }
}

$hero = new SuperHero("Batman", "Dinero", "Tierra");
echo $hero->description();
/*
$hero = new SuperHero();
$hero->name = "Superman";
$hero->powers = "Volar, rayos x, super fuerza";
$hero->planet = "Krypton";
$hero->attack();
echo $hero->description();
*/
// echo $hero->name;
// echo "<br>hola";
