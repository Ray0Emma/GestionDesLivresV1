<?php
   require_once "valider1.php";
  require_once "connection.php";
  
?> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <title>Ajouter des Livres</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class="text-gray-700 font-mono w-screen h-screen flex flex-col justify-center" >
        
        <form  class="flex flex-col justify-center items-center" 
                method="POST" action="validationAjoute.php" enctype="multipart/form-data" >
           <img src="img/victorbook.png" class="w-1/4">
              <div class="text-lg m-4 justify-center text-center">
                <h2 ><strong>Bienvenu !</strong></h2> 
              </div>
              <input class="pl-2 mb-5 border-b-2 border-indigo-900 
                     font-display focus:outline-none"
                     type="text" name="titre" required placeholder="Titre">
              <input class="pl-2 mb-5 border-b-2 border-indigo-900 
                     font-display focus:outline-none"
                     type="text" name="auteur" required placeholder="Auteur" >
              <input class="pl-2 mb-5  border-b-2 border-indigo-900 
                     font-display focus:outline-none"
                     type="date" name="annee" required placeholder="Année">
                     <p class="font-bold border-b-2 border-indigo-900">
                        choisi la photo de votre livre</p>
              <input  class="m-5 font-display focus:outline-none display: none"
                     type="file" name="photo" required placeholder="Photo" >
              <input class="cursor-pointer py-2 px-10 bg-indigo-800 
                     hover:bg-indigo-900 rounded-full text-white font-bold 
                     focus:outline-none"
                     type="submit" name="submit" value="Enregistrer">
        </form>


    </body>
</html>