<?php

declare(strict_types=1); //a nivel de archivo, fuerza la declaracion de tipos, sin esto las variables se castean automaticamente por php

function get_data(string $url): array
{
    $result = file_get_contents($url); // get sencillo
    $data = json_decode($result, true);
    // echo $title; No puede ser accedido porque esta fuera del scope de la funcion hay que inidicar que es global
    /*
        global $title;
        echo $title;
    */
    return $data;
}

// function get_until_message(int $days): string
// {
//     return match (true) {
//         $days === 0 => "Hoy se estrena :D",
//         $days === 1 => "Mañana se estrena ",
//         $days < 7 => "Esta semana se estrena...",
//         $days < 30 => "Este mes se estrena...",
//         default => "$days dias hasta el estreno"
//     };
// }
