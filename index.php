<?php

//declare(strict_types=1); //a nivel de archivo, fuerza la declaracion de tipos, sin esto las variables se castean automaticamente por php
// require 'functions.php'; //es como si pegaras el código del archivo functions.php aquí, peligroso si hay variables con el mismo nombre porque es duplicar
require_once 'consts.php';
require_once 'functions.php'; //solo se carga una vez, si ya se cargo no lo vuelve a cargar
// require tiran errores fatal si no se encuentra el archivo, include no solo hace la advertencia

// include 'functions.php'; //si no encuentra el archivo no tira error fatal, solo advertencia
// include_once 'functions.php'; //si no encuentra el archivo no tira error fatal, solo advertencia

// recomendacion user el require siempre que sea posible porque ver los errores. si son archivos opcionales un include
// el require repetido puede ser util si debes cargar un archivo varias veces ejemplo un banner <?php require 'banner.php'? > y lo pones en varios lugares

$title = 'hola';
$data = get_data(API_URL);
//$until_message = get_until_message($data['days_until']);
// subir contenido a zeabur desde un repo en github
?>

<?php require 'sections/head.php' ?>
<?php require 'sections/styles.php' ?>
<?php require 'sections/main.php' ?>

