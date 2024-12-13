<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$reservation=$_POST['reservation'];

echo "$reservation";
require'database.php';
$_requete="INSERT INTO membres (Nom,Prenom,Email,Telephone) VALUES('$nom' ,'$prenom','$email','$telephone') ";
$query=mysqli_query($conn,$_requete);

$last_id= mysqli_insert_id($conn);

$id_activite="SELECT ID_Activite FROM activites WHERE Nom_Activite='$reservation'";
$forma_query=mysqli_query($conn,$id_activite);
if($forma_query){
    $rows=mysqli_fetch_assoc($forma_query);
    $ana=$rows['ID_Activite'];
}else{
    echo "Erreur !";
}



?>