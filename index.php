<?php

//declare(strict_types=1); //a nivel de archivo, fuerza la declaracion de tipos, sin esto las variables se castean automaticamente por php
// require 'functions.php'; //es como si pegaras el código del archivo functions.php aquí, peligroso si hay variables con el mismo nombre porque es duplicar
require_once 'functions.php'; //solo se carga una vez, si ya se cargo no lo vuelve a cargar
// require tiran errores fatal si no se encuentra el archivo, include no solo hace la advertencia

// include 'functions.php'; //si no encuentra el archivo no tira error fatal, solo advertencia
// include_once 'functions.php'; //si no encuentra el archivo no tira error fatal, solo advertencia

// recomendacion user el require siempre que sea posible porque ver los errores. si son archivos opcionales un include
// el require repetido puede ser util si debes cargar un archivo varias veces ejemplo una imagen2

const API_URL = 'https://www.whenisthenextmcufilm.com/api';
$title = 'hola';
$data = get_data(API_URL);
//$until_message = get_until_message($data['days_until']);
// subir contenido a zeabur desde un repo en github
?>
<!-- <?php require 'banner.php' ?> ejemplo -->

<head>
    <meta charset="UTF-8" />
    <title>La proxima peli de marvel</title>
    <meta name="description" content="prox peli marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<main>
    <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php
        var_dump($data);
        ?>
    </pre>
    <section>
        <hgroup>
            <h3>La proxima peli de marvel es: <?= $data['title'] ?>, se estrena en <?= $data['days_until'] ?> dias</h3>
            <!-- valido para php 8 <h3>La proxima peli de marvel es: <?= $data['title'] ?> - <?= $until_message ?></h3> -->
            <p>La fecha de estreno es: <?= $data['release_date'] ?></p>
            <p>La siguiente es: <?= $data['following_production']["title"] ?></p>
            <p>La sinopsis es: <?= $data['overview'] ?></p>
            <img src="<?= $data["poster_url"]; ?>" alt="Poster de <?= $data["title"] ?>"
                style="border-radius: 16px;"
                width="300" srcset="">
        </hgroup>

    </section>
</main>
<style>
    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>