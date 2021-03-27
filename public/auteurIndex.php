<?php 

        require_once "connection.php";
        
        $cin=$_POST['cin'];
        $nomP=$_POST['name'];
        $email=$_POST['email'];
        $date=$_POST['dateN'];

        $requ=$myDb->prepare("INSERT INTO  AUTEURS(CIN,NOM_PRENOM,E_MAIL,DATE_)
                              VALUES( :cin,:nom,:em,:dt)");
        $d=array(":cin"=>$cin,":nom"=>$nomP,":em"=>$email,":dt"=>$date);
        //POUR EXECUTER
         $requ->execute($d);
        //forward
        require_once "LogIn.php";
        
?>