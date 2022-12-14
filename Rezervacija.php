<?php

class Rezervacija
{
    public $rezervacija_id;
    public $ime;
    public $prezime;
    public $email;
    public $film_id;
    public $dan;
    public $termin;
    public $broj_karata;


    public function __construct($rezervacija_id = null, $ime = null, $prezime = null, $email = null, $film_id = null, $dan = null, $termin = null, $broj_karata = null)
    {
        $this->rezervacija_id = $rezervacija_id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->email = $email;
        $this->film_id = $film_id;
        $this->dan = $dan;
        $this->termin = $termin;
        $this->broj_karata = $broj_karata;
    }


    public function dodajRezervaciju($rezervacija, $connection)
    {
        $sql_query = "INSERT INTO rezervacija VALUES (NULL, '$rezervacija->ime', '$rezervacija->prezime', '$rezervacija->email', '$rezervacija->film_id', '$rezervacija->dan', '$rezervacija->termin', '$rezervacija->broj_karata')";

        return $connection->query($sql_query);
    }


    public static function getAllReservations($connection)
    {
        $sql_query = "SELECT rezervacija.*, film.naziv FROM rezervacija JOIN film ON rezervacija.film_id = film.film_id";

        return $connection->query($sql_query);
    }


    public static function obrisiRezervaciju($id, $connection)
    {
        $sql_query = "DELETE FROM rezervacija WHERE rezervacija_id=" . $id;

        return $connection->query($sql_query);
    }


    public static function sortRezervacije($sort, $connection)
    {
        $sql_query = "SELECT rezervacija.*, film.naziv
         FROM rezervacija JOIN film ON rezervacija.film_id = film.film_id
         ORDER BY rezervacija.dan " . $sort . ", rezervacija.termin " . $sort;


        return $connection->query($sql_query);
    }
}
