<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "rez_bioskop";

$connection = new mysqli($host, $username, $password, $database) or die("Connection error: %s\n" . $connection->error);
