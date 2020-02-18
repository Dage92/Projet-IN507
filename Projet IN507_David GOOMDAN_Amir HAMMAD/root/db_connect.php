<?php

// Les quatre variables pour se connecter à la base de donnée
$host = "localhost";
$username = "user";
$password = "user";
$database = "user";

//~ CREATE USER 'Users'@'localhost' identified by 'User1234&';
//~ CREATE USER 'Employes'@'localhost' identified by 'Employe1&';
//~ CREATE USER 'Admin'@'localhost' identified by 'Admin123&';

// Se connecte à la base de donnée
$mysqli = new mysqli($host, $username, $password, $database);

//Gestion d'erreurs et initialise la connection à la base de donnée
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "<br>";

?>
