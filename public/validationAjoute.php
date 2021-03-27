<?php
  require_once "valider1.php";
  require_once "connection.php";
  //recuperer les donnees
  $titre=$_POST['titre'];
  $annee=$_POST['annee'];
  $auteur=$_POST['auteur'];
  $nomPhoto=$_FILES['photo']['name'];// on s interese au titre du photo
  $file_img_name=$_FILES['photo']['tmp_name'];//chemin temporaire
  //le deplacer
  move_uploaded_file($file_img_name,"./imgs/$nomPhoto");
  //envoyer une requete vers la base de donnees
  $requ=$myDb->prepare("INSERT INTO livres(TITRE,ANNEE,AUTEUR,PHOTO) 
                        VALUES(:tit,:ann,:aut,:ph);");
  $d=array(":tit"=>$titre,":ann"=>$annee,":aut"=>$auteur,":ph"=>$nomPhoto);
  //POUR EXECUTER
  $requ->execute($d); 
?>
 
  <!DOCTYPE html>
  <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <title> Livre </title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class=" text-gray-700 flex flex-col justify-center items-center">
      <img src="img/victorbook.png" class="w-32">
       <table  class=" border-collapse border border-gray-800 rounded" >
         <caption class="m-10 font-bold" >Votre Livre</caption>
            <tr class="border border-gray-600">
               <td class="border border-gray-400">Titre:</td>
               <td class="border border-gray-400"> <?php echo $titre ?></td>
            </tr>
            <tr class="border border-gray-600">
                <td class="border border-gray-400">Année:</td>
                <td class="border border-gray-400"><?php echo $annee ?></td>
            </tr>
            <tr class="border border-gray-600">
                <td class="border border-gray-400">Auteur:</td>
                <td class="border border-gray-400"><?php echo $auteur ?></td>
            </tr>
            <tr class="border border-gray-600">
                <td class="border border-gray-400">Photo:</td>
                <td class="border border-gray-400"><img class="w-32" 
                    src="imgs/<?php echo $nomPhoto?>"  ></td>
            </tr>
        </table>
        <a href="afficherLivres.php" 
           class="m-7 cursor-pointer py-2 px-10 bg-indigo-800 
           hover:bg-indigo-900 rounded-full text-white font-bold 
           focus:outline-none">Afficher La Liste</a>
    </body>
   </html>
