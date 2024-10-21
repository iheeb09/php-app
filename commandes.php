<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Régal Tunisien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu-container">
        <right><a href="menu.html">Menu du jour</a></right>
        <h1>Le Régal Tunisien</h1>
        <center><img src="logo.jpeg" height="150" width="150"/></center>
        <h1>Mes commandes</h1>



        <?php


// Include the Commande class

include('commande.php');

// Create a new Commande object
$com = new Commande();

// Get all Commande
$CommandeList = $com->RC();

// Check if there are any Commandes
if ($CommandeList) {
    //  Commande list 
   
} else {
    echo "No Commandes found.";
}




?>



<table border="1">
    <tr>
        <th>id</th>
        <th>Date</th>
        <th>Total</th>
        
    </tr>

    <?php foreach ($CommandeList as $row) 
      
      {
       echo "<tr>";
       echo "<td>" . $row['id'] . "</td>";
       echo "<td>" . $row['Date_creation'] . "</td>";
       echo "<td>" . $row['totale']. "</td>";
    
    
       echo "</tr>";



      }
     
     

   ?>
</table>
        

        
    </body>
    
    </html>