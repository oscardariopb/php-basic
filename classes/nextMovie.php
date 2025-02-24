<?php

declare(strict_types=1);

class NextMovie
{
    private string $title;
    private string $release_date;
    private int $days_until;
    private array $following_production;
    private $poster_url;
    public function __construct($title, $release_date, $days_until, $following_production, $poster_url)
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->days_until = $days_until;
        $this->following_production = $following_production;
        $this->poster_url = $poster_url;
    }

    // function get_until_message(): string
    // {
    //     $days = $this->days_until;
    //     return match (true) {
    //         $days === 0 => "Hoy se estrena :D",
    //         $days === 1 => "Mañana se estrena ",
    //         $days < 7 => "Esta semana se estrena...",
    //         $days < 30 => "Este mes se estrena...",
    //         default => "$days dias hasta el estreno"
    //     };
    // }

    public static function fetch_and_create_movie(string $api_url): NextMovie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);

        return new self(
            $data['title'],
            $data['release_date'],
            $data['days_until'],
            $data['following_production'] ?? "Desconocido",
            $data['poster_url']
        );
    }

    public function get_data()
    {
        return get_object_vars($this);
    }
}
