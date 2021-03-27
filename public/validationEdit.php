<?php
  require_once "valider1.php";
  require_once "connection.php";
  //recuperer les donnees
  $code=$_POST['code'];
  $titre=$_POST['titre'];
  $annee=$_POST['annee'];
  $auteur=$_POST['auteur'];
  $nomPhoto=$_FILES['photo']['name'];//on s interese au nom du photo
  $file_img_name=$_FILES['photo']['tmp_name'];//chemin temporaire
  //le deplacer
  move_uploaded_file($file_img_name,"imgs/$nomPhoto");
  //envoyer une requete vers la base de donnees
  //POUR l EXECUTER
  $requ=$myDb->prepare("UPDATE LIVRES SET TITRE=:tit, AUTEUR=:aut, 
                        ANNEE=:ann,PHOTO=:ph WHERE CODE=:co");
  $d=array(":tit"=>$titre,":ann"=>$annee,":aut"=>$auteur,":ph"=>$nomPhoto,
           ":co"=>$code);
  //POUR EXECUTER
  $requ->execute($d);
  //forward
  require_once "afficherLivres.php";

?>