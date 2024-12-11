<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "gestion_salle_sport";
$conn = "";
try{
    $conn = new PDO ("mysql:host=$db_server;dbname=$db_name",$db_user,$db_pass) ;
echo"you are connected !!!";
}
catch(PDOException $e ){
     die('Erreur:  '.$e->getMessage());

}



?>