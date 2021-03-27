<?php
  require_once "valider1.php";
  require_once "connection.php";
  $CODE=$_GET['code'];
  //execute
  $requ=$myDb->prepare("DELETE FROM LIVRES WHERE (CODE=:co)") ;
  $d=array(":co"=>$CODE);
  $requ->execute($d);
  //forward
  require_once "afficherLivres.php";
?>