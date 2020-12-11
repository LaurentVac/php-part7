<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1 ET 3 part 7php</title>
</head>
<body> 


<?php 
// condition qui affiche les valeur transmise dans le formulaire
     if (isset($_GET['firstname']) AND isset($_GET['lastname']))   // 
     {
         echo "Prénom : " . $_GET['firstname'] . '<br> Nom : ' . $_GET['lastname'];
     }
     else   // Il manque des paramètres, on avertit le visiteur
     {
         echo "Pas d'informations";
     }


    ?>
</body>
</html>