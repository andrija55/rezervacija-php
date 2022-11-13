<?php

class Movie
{
    public $film_id;
    public $naziv;
    public $zanr;
    public $opis;
    public $glumac;
    public $reziser;


    public function __construct($film_id = null, $naziv = null, $zanr = null, $opis = null, $glumac = null, $reziser = null)
    {
        $this->film_id = $film_id;
        $this->naziv = $naziv;
        $this->zanr = $zanr;
        $this->opis = $opis;
        $this->glumac = $glumac;
        $this->reziser = $reziser;
    }

    public static function getAllMovies($connection)
    {
        $sql_query = "SELECT * FROM film";

        return $connection->query($sql_query);
    }


    public static function searchMovies($naziv, $connection)
    {
        $sql_query = "SELECT * FROM film WHERE naziv LIKE '%" . $naziv . "%'";

        return $connection->query($sql_query);
    }
}
