<?php

  require_once "connection.php";
  //récupération de donnees
  $loog=$_POST['login'];
  $passW=$_POST['passw'];
  //crypter le mot de passe
  $passWC=md5($passW);
  //comparer
  $query="SELECT * FROM USERS WHERE LOGIN=:loog AND PASSWORD=:passWC ; ";
  //exicuter
  $tabRS=$myDb->prepare($query);
  $tabRS->bindValue(":loog",$loog,PDO::PARAM_STR);
  $tabRS->bindValue(":passWC",$passWC,PDO::PARAM_STR);
  $tabRS->execute();

  //comparer 
  if($user=$tabRS->fetch())
  
  {
     //start a session
     session_start();
     $_SESSION['niv']=$user['NIVEAU'];
     //deriger vers
     header("location:afficherLivres.php");
  }
  // si n'est pas ni un admin ni un user deriger vers
  else 
  { 
    header("location:index.php");
  }
?>