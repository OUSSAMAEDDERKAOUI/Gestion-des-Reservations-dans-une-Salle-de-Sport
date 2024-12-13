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

$requete_reserv="INSERT INTO reservation(ID_Membre,ID_Activite,Date_Reservation) values ('$last_id','$ana',CURRENT_DATE)";
$query_reservation = mysqli_query($conn,$requete_reserv);

if($query_reservation){
    // $last_id = mysqli_insert_id($conn);
    // echo $last_id;
    // echo"<h1>insertion Res avec success</h1>";
    header("location: affichage.php");
    // exit();
}
else{
    echo"<h1>erreur Res d'insertion</h1>";
}

?>