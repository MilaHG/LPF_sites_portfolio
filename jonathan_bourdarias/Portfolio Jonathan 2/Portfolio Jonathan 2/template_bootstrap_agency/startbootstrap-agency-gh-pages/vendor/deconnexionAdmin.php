<?php

require 'init.inc.php';

class DeconnexionAdmin{

    public function deconnexionAdmin(){
       $message_deconnexion = '';

       if($_GET['deconnexion'] == 'deconnexion'){
       
            session_destroy();

            header("location: index.php");

       }else{
        //    var_dump($_GET);
           echo 'Erreur lors de la deconnexion';
           die();
       }
    }
}