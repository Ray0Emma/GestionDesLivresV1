<?php

   $hostN="localhost";
   $db="db_livres";
   $dsn="mysql:host=".$hostN.";dbname=".$db;
   try{
       $myDb=new PDO($dsn,"root","");

   }catch(PDOException $e){
    
         echo "Failed: ".$e->getMessage();

   }
?>