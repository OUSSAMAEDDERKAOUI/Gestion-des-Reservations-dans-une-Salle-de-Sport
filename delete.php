
<?php
require 'database.php' ;
$id_deleted=$_GET['id'];
 $requete= "DELETE FROM Reservation WHERE ID_Resrvation = '$id_deleted' ";
$query = mysqli_query($conn,$requete); 
if($query){
    header("location:affichage.php");
}
?>

