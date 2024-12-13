



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <?php  require'database.php' ?>
<table class="min-w-full divide-y divide-gray-200">
<thead>
    <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telephone</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom D'activite</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de Reservation</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut De Reservation</th>
    </tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200">
    <?php
    $requete_membre= "SELECT * FROM 
    reservation JOIN membres on membres.ID_Membre=reservation.ID_Membre 
    JOIN activites on reservation.ID_Activite=activites.ID_activite
    ORDER BY reservation.ID_Resrvation
    " ;

    $forma_query=mysqli_query($conn,$requete_membre);
    while($rows=mysqli_fetch_assoc($forma_query)){
         $id=$rows['ID_Resrvation'];
        echo "<tr>";
        echo '<td class="px-6 py-4 whitespace-nowrap text-center">'.$rows['Nom'].'</td>';
        echo '<td class="px-6 py-4 whitespace-nowrap text-center">'.$rows['Prenom']. '</td>';
        echo '<td class="px-6 py-4 whitespace-nowrap text-center">'.$rows['Email'].'</td>';
        echo '<td class="px-6 py-4 whitespace-nowrap text-center">'.$rows['Telephone'].'</td>';
       
        echo '<td class="px-6 py-4 whitespace-nowrap">';
           echo '<button class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>';
            echo '<a href="delete.php?id='.$id.'">';
            echo '<button  class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>';
            echo '</a>';
       echo '</td>';
   echo '</tr>' ;
    }
   
    ?>

</tbody>

</table>
<script src="https://cdn.tailwindcss.com"></script>

</body>
</html>



























