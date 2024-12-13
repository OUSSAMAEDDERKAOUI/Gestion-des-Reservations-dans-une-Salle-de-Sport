<?php

// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "gestion_salle_sport";
// $conn = "";



$conn = new mysqli("localhost", "root", "", "gestion_salle_sport");

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion :  !!!!!!!!!!!!!!!!" . $conn->connect_error);
}
