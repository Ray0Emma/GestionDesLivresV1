<?php
//pour que l admin seul qui va editer
require_once "valider1.php";
//connecter a la base de donnees 
require_once "connection.php";
//recuperer la valeur du code 
  $CODE=$_GET['code'];
// la requete
  $query="SELECT* FROM Livres WHERE (CODE= $CODE)";
//selection les données
//executer
  $tabRS=$myDb->prepare($query) ;
  $tabRS->execute();
//le stocker dans $ETUD
  $ETUD=$tabRS->fetch();

?>

  <!DOCTYPE html>
  <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <title>Editer des Livres</title>
        <link rel="stylesheet" href="styles.css">
    </head>

  
    <body class="text-gray-700 font-mono w-screen h-screen
                 flex flex-col justify-center" >
        
      <form class="flex flex-col justify-center items-center"
            method="POST" action="validationEdit.php" 
            enctype="multipart/form-data" >
        <img src="img/bgpho.jpg" class="w-3/12">
        <div class="text-lg mb-4 justify-center text-center">
          <h2 ><strong> Vous pouvez editer votre livre !</strong></h2> 
          </div>
        
                <input type="text" name="titre" value="
                      <?php echo $ETUD['TITRE'] ?>"
                       class="pl-2 mb-5 border-b-2 border-indigo-900 
                       font-display focus:outline-none">
          
                <input type="date" name="annee" value="
                       <?php echo $ETUD['ANNEE'] ?>"
                       class="pl-2 mb-5 border-b-2 border-indigo-900 
                       font-display focus:outline-none">
       
                 <input type="text" name="auteur" value="
                        <?php echo $ETUD['AUTEUR'] ?>"
                        class="pl-2 mb-5 border-b-2 border-indigo-900 
                        font-display focus:outline-none">
         
                <img class="w-32" src="imgs/<?php echo $ETUD['PHOTO']?>">
                <input type="file" name="photo" 
                       class=" m-8 cursor-pointer py-2 px-10 
                       focus:outline-none">
                <input class="cursor-pointer py-2 px-10 
                       bg-indigo-800 hover:bg-indigo-900 
                       rounded-full text-white font-bold focus:outline-none"
                       type="submit" name="submit" value="Enregistrer">
              
      </form>
    </body>
</html>
