<?php
# iniciar secion en curll

const API_URL = 'https://www.whenisthenextmcufilm.com/api';
$ch = curl_init(API_URL);
// indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* 
Ejecutar la peticion
y guardar la respuesta en una variable
*/
$result = curl_exec($ch);
// allternativa usar file_get_contents
// $result = file_get_contents(API_URL); //get sencillo
$data = json_decode($result, true);
curl_close($ch);

// subir contenido a zeabur desde un repo en github
?>

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