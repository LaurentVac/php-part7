<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2 part 7 php</title>
</head>
<body> 

<?php 

// condition qui affiche les valeur transmise dans le formulaire
     if (isset($_POST['firstname']) AND isset($_POST['lastname']))   // 
     {
         echo "Prénom : " . $_POST['firstname'] . '<br> Nom : ' . $_POST['lastname'];
     }
     else   // Il manque des paramètres, on avertit le visiteur
     {
         echo "Pas d'informations";
     }


   

    ?>

    
</body>
</html>