<?= "Mi primera app <br>"; ?>

<h1>
    <?php
    echo "Hello World <br>";
    ?>

</h1>

<?php
$name = "Juan"; // variables inician con $
$isDev = true; // boolean
$age = 50;
echo "Hola $name <br>";
var_dump($name); // muestra la info de la variable
var_dump($isDev); // muestra la info de la variable
var_dump($age); // muestra el error porque la salida en pantalla 
echo "name es: " . gettype($name) . "<br>"; // muestra el tipo de dato
is_string($name); // devuelve true si es string
is_bool($isDev); // devuelve true si es boolean
is_int($age); // devuelve true si es int

$newAge = (bool) 20;
$salida = "Hola $name con una edad de $newAge"; // interpolacion de variables funciona con comillas dobles
$salida .= " estas genial \$name"; // concatenar, si quieres poner las comillas dobles "\$name"\ eso mostraria estas genial "Juan" o con comilla sencilla
echo " <br> Hola $name 
con una edad 
de $newAge";
?>

<?= "<br> Holanda $salida;" ?>
<!-- <?= "Holanda " . $name; ?> -->

<?php
define("PI", 3.1416); // constante
const NOMBRE = 'oSCAR'; // constante
echo PI;
echo NOMBRE;
// constantes no sirven en tiempo de ejecucion, deben ser declaradas al inicio del script
$isOld = $age > 40 ? "Eres viejo" : "Eres joven"; // operador ternario
echo $isOld;
if ($isOld) {
    echo "Eres viejo";
} elseif ($isDev) {
    echo "eres dev";
} else {
    echo "Eres joven";
}
?>

<?php if ($isDev) : ?>
    <h2> Eres dev </h2>
<?php elseif ($isOld) : ?>
    <h2> Eres Viejo </h2>
<?php else : ?>
    <h2> Eres Joven </h2>
<?php endif; ?>



<?php
// $edadSalida = match ($age) {
//     0, 1, 2 => "Eres un bebe",
//     10 => "Tienes 10 años",
//     20 => "Tienes 20 años",
//     30 => "Tienes 30 años",
//     default => "Tienes otra edad",
// };

// $edadSalidaBoolean = match (true) {
//     $age < 2 => "Eres un bebe",
//     $age < 18 => "Eres adolescente años",
//     $age === 18 => "Eres mayor de edad",
//     $age < 40 => "Eres adulto joven",
//     $age >= 40 => "Eres adulto viejo",
//     default => "Tienes otra edad, $name",
// };

$bestLanguages = [1, 2, 3, 'php'];
$bestLanguages[] = 'javascript';
$bestLanguages[0] = 'python';

// arreglos asociativos
$person = [
    'name' => 'Juan',
    'age' => 50,
    'isDev' => true,
    'languages' => ['php', 'javascript', 'python']
];
$person['name'] = 'Pedro';
$person['languages'][] = 'java';
?>
<h2><?= $bestLanguages[0] ?> </h2>
<ul>

    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
<!-- php 
php --help
php -S localhost:8000
php -r

separar lo que renderizas de la logica

-->