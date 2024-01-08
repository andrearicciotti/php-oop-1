<?php
class Movie // definizione classe
{
    public $title; // variabili d' istanza
    public $release_year;
    public $country;
    public $film_director;

    public function __construct($_title, $_release_year, $_country, $_film_director) // costruttore
    {
        $this->title = $_title;
        $this->release_year = $_release_year;
        $this->country = $_country;
        $this->film_director = $_film_director;
    }

    function movieInfo($movie) // funzione pubblica per concatenere le stringhe con le informazioni sul film
    {
        return $movie->title . ' is a movie product in ' . $movie->country . ', directed by ' . $movie->film_director . ', released ' . $movie->release_year;
    }
}

