<?php
//pour que les admins seul qu ils peut supprimer et editer
 session_start();
  
 if(!(isset($_SESSION['niv']))){
         header("location:index.php");
         exit;
 }
?>