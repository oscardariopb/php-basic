<?php

declare(strict_types=1);
class SuperHero
{
    // propiedad y métodos
    // visibilidad
    public string $name;
    public $powers;
    public $planet;
    public $level;

    public function __construct($name, $powers, $planet)
    {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }

    /*
    // promoted properties son de php 8 y se pueden usar para evitar tener que declarar las propiedades
    public function __construct(readonly public string $name, private array $powers, public string $planet)
    { }
    */
    // constructor
    public function attack()
    {
        return "$this->name está atacando...";
    }

    public function description()
    {
        $powers = implode(", ", $this->powers); // implode -> join en js, explode -> split en js
        return "$this->name es del planeta $this->planet y tiene los poderes de $powers";
    }

    public function show_all()
    {
        return get_object_vars($this);
    }

    //metodos staticos
    public static function random()
    {
        $names = ["Batman", "Superman", "Cat woman", "Thor"];
        $powers = [
            ["Dinero", "inteligencia"],
            ["Volar", "rayos x", "super fuerza"],
            ["inteligencia", "Volar", "rayos x", "super fuerza"],
            ["Volar", "Martillo"]
        ];
        $planets = ["Tierra", "Krypton", "Tierra", "Asgard"];
        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];
        //echo "El heroe es $name, tiene los poderes de: " . implode(', ', $power) . " y es del planeta $planet";
        return new self($name, $power, $planet);
    }
}
// instanciar
$hero = new SuperHero("Batman", ["Dinero", "inteligencia"], "Tierra");
//echo $hero->description(); // -> metodo publico
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
// metodos estaticos sirven para acceder a metodos sin tener que instanciar la clase, se ejecutan antes de acceder al objeto, utiles para validar datos
//SuperHero::random();
$hero2 = SuperHero::random();
echo $hero2->description();
