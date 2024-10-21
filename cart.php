<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu-container">
        <h1>Mon Panier</h1>

        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['q1'])) {

        echo'</br>';
        echo'</br>';
        echo'</br>';
        
         $plat1 = $_POST['n1'];
         $pr1= $_POST['p1'];
         $qt1= $_POST['q1'];
         $st1=$pr1*$qt1;
        echo 'plat : '. $plat1;
        echo '</br>prix : ' . $pr1;
        echo '</br>Quantite : ' . $qt1;
        echo'</br> </br> sous-totale :'.$st1;
    } else {
        echo 'Le champ caché n\'est pas défini.';
    }

    if (isset($_POST['n2'])) {

        echo'</br>';
        echo'</br>';
        echo'</br>';
        echo'</br>';
        
         $plat2 = $_POST['n2'];
         $pr2= $_POST['p2'];
         $qt2= $_POST['q2'];
         $st2=$pr2*$qt2;
        echo 'plat : ' . $plat2;
        echo '</br>prix : ' . $pr2;
        echo '</br>Quantite : ' . $qt2;
        echo'</br> </br> sous-totale :'.$st2;
    } else {
        echo 'Le champ caché n\'est pas défini.';
    }
    if (isset($_POST['n3'])) {


        echo'</br>';
        echo'</br>';
        echo'</br>';
        
         $plat3 = $_POST['n3'];
         $pr3= $_POST['p3'];
         $qt3= $_POST['q3'];
         $st3=$pr3*$qt3;
        echo 'plat : ' . $plat3;
        echo '</br>prix : ' .$pr3;
        echo '</br>Quantite : ' . $qt3;
        echo'</br> </br> sous-totale :'.$st3;
    } else {
        echo 'Le champ caché n\'est pas défini.';
    }




    $t=$st1+$st2+$st3;

    echo'</br> </br></br> </br><h3> Totale :'.$t.'</h3>';

} else {
    echo 'Formulaire non soumis correctement.';
}
?>

   
<form  action="" method="POST">
    <button class="add-to-cart" type="submit" name="ok">Passer commande</button>
    </form>


</div>




<?php

if (isset($_POST['ok'])) 

{
    include('commande.php');
    $cmd=  new Commande();

    $cmd->Date_creation=date('Y-m-d H:i:s');
    $cmd->totale =$st1+$st2+$st3;
    echo "<script>alert('Invalid total value.');</script>";

    


    

    if ($cmd->CR_C())

       { 
        header('location:commandes.php');
        
        }
       
    else
       { echo "Insertion echouee";
         header('location:menu.html');
       }






}


?>




   






    


   

</body>
</html>
