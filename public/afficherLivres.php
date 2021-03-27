<?php

 //pour que les admins seul qu ils peut supprimer et editer
 require_once "valider1.php";
 //pour connecter au base de données
 require_once "connection.php";

 $query="SELECT * FROM LIVRES ";
 $tabRS=$myDb->prepare($query);
 $tabRS->execute();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <title>Liste des Livres</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class=" text-gray-700 flex flex-col justify-center items-center">
      <img src="img/book.png" class="w-20">
        <table  class=" border-collapse border border-gray-800 rounded" >
         <caption class="mb-10 font-bold" >Liste des Livres</caption>
            <tr class="border border-gray-600">
               <div class="">
               <?php if($_SESSION['niv']==0) { ?>
                <th class="bg-gray-400 border border-gray-600">CODE:</th>
               <?php } ?>
                <th class="bg-gray-400 border border-gray-600">Titre:</th>
                <th class="bg-gray-400 border border-gray-600">Auteur:</th>
                <th class="bg-gray-400 border border-gray-600">Année:</th>
                <th class="bg-gray-400 border border-gray-600">Photo:</th>
                
                <?php if($_SESSION['niv']==0) { ?>
                    <th class="bg-gray-400 border border-gray-600">Action:</th>
                <?php } ?>
               </div>
            </tr>
            <?php //Fetch une result et passe au suivante
                  while(($Etud=$tabRS->fetch())){?>
            <tr >
                <!-- l admin seul qui peut voir les codes -->
                <?php if($_SESSION['niv']==0) { ?>
                <td class="border border-gray-600"><?php echo $Etud["CODE"] ?></td><?php } ?>
                <td class="border border-gray-600"><?php echo $Etud["TITRE"] ?></td>
                <td class="border border-gray-600"><?php echo $Etud["AUTEUR"]  ?></td>
                <td class="border border-gray-600"><?php echo $Etud["ANNEE"]?></td>
                <td class="border border-gray-600">
                <img class="w-32"src="imgs/<?php echo $Etud["PHOTO"] ?>" ></td>
                 <!-- l admin seul qui peut voir ces actions -->
                <?php if($_SESSION['niv']==0) { ?>
                <td class="border border-gray-600">
                <a href="SupprimeLivres.php?code=<?php echo $Etud["CODE"] ?>" class="cursor-pointer py-2
                  px-5 bg-red-500 hover:bg-red-600 rounded-full text-white font-bold focus:outline-none" >
                 Supprimer</a>
                
                <a href="EditeLivres.php?code=<?php echo $Etud["CODE"] ?>" class="cursor-pointer py-2 px-5
                 bg-green-400 hover:bg-green-500 rounded-full text-white font-bold focus:outline-none" >
                 Editer</a>
                
                <a href="AjouterLivres.php?code=<?php echo $Etud["CODE"] ?>" class="cursor-pointer py-2 px-5
                 bg-blue-300 hover:bg-blue-400 rounded-full text-white font-bold focus:outline-none">
                Ajouter</a></td>
            </tr>
            <?php }
              }      
            ?>
        </table>
        
    </body>
   </html>