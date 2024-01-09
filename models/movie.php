<?php
/**
 * Define the movies and their charachteristics
 */
class Movie // definizione classe
{
    public $title; // variabili d' istanza
    public $release_year;
    public $country;
    public $film_director;
    public $genres;

    /**
     * @param string $_title
     * @param string $_release_year
     * @param string $_country
     * @param string $_film_director
     * @param Array $_genre
     */
    public function __construct($_title, $_release_year, $_country, $_film_director, $_genres) // costruttore
    {
        $this->title = $_title;
        $this->release_year = $_release_year;
        $this->country = $_country;
        $this->film_director = $_film_director;
        $this->genres = $_genres;
    }

    /**
     * Return a string with principal movies details
     * @return string
     */
    function movie_info($movie) // funzione pubblica per concatenere le stringhe con le informazioni sul film
    {
        $genres_string = '';
        foreach ($movie->genres as $key => $genre) {
            $genres_string .= $genre->name;
            if($key < count($movie->genres) - 1) {
                $genres_string .= ', ';
            }
        }

        return $movie->title . ' is an ' . $genres_string . ' movie product in ' . $movie->country . ', directed by ' . $movie->film_director . ', released ' . $movie->release_year;
    }
}

