<?php

include('../DB.php');
include('../Rezervacija.php');

Rezervacija::obrisiRezervaciju($_POST['rezervacija_id'], $connection);
