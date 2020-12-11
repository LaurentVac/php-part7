<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6 part 7 php</title>
</head>
<body> 
<!-- création de formulaire action="" renverra vers la page ; la methode get est utilisée -->
<?php
//grace a empty je verifie si il n'y a pas de valeur dans les champs 
if (empty($_GET['titre']) AND empty($_GET['firstname']) AND empty($_GET['lastname'])) {
  ?>  
         
<form action="index.php" method="get">
<!-- //menu déroulant pour le choix de titre  -->
<select name="titre">
<option value="" selected="selected"></option>
<option value="Mme" >Madame</option>
<option value="Mr">Monsieur</option>
</select>
<br/>
Entrez votre prénom : <br/>
<input type="text" name="firstname"><br/><br/>
Entrez votre nom : <br/>
<input type="text" name="lastname"><br/><br/>
<input type="file" id="file" name="avatar" accept= ".PDF"><br/><br/>
<input type="submit" value="Envoyer">
<!-- exo7 -->

  <!-- fin Champs du formulaire -->
</form>

   <?php
         
   // je teste si une valeur est entré dans le champ
      }elseif (!empty($_GET['titre']) AND !empty($_GET['firstname']) AND !empty($_GET['lastname'] AND !empty($_GET['avatar']))){
        
             echo $_GET['titre']." " . $_GET['firstname'] . ' ' . $_GET['lastname'] .' a envoyé le fichier "'. $_GET['avatar']. '" <br/>';
         }
         else   // Il manque des paramètres, on avertit le visiteur
         {
             echo "Veuillez recommencer";
         };

        // si une valeur est entré dans le champ
        if(!empty($_GET['avatar'])){
         $file = $_GET['avatar'];
         //je retourne l'extension du fichier grâce a PATHINFO_EXTENSION uniquement la derniere extension est la force en majuscule avec strtolower
         $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        // si une valeur est saisi et que type de pichier n'est pas un pdf
        if (!empty($_GET['avatar']) && $fileType != 'pdf') {
          
             echo 'Non valide veuillez revenir à la page précedente est envoyer un fichier format pdf !';
         } else {
             echo 'Nom du fichier'.$file.' Envoi confirmé.';
         }
        }

?>
    
</body>
</html>
       
 
         
         
 
        

       

      