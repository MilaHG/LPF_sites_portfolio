<?php
require 'init.inc.php';

// echo '<pre>';
// var_dump($pdo);
// echo '</pre>';
 
class Admin{
    
    protected $connexion;
    protected $message =  ''; 
    protected $reponse; 
    // protected $resultat; 
    protected $pseudo;
    protected $mdp;

    public function connexionAdmin(){

        if (!empty($_POST)) {

            // extract($_POST, EXTR_SKIP);
            if(empty($_POST['pseudo'])){
                $this->message .= '<div class="text-white">Le pseudo est requis.</div>';
            }
        
            if(empty($_POST['mdp'])){
                $this->message .= '<div class="text-white">Le mot de passe est requis.</div>';
            }

            if(empty($this->message)){

                $pdo = new PDO('mysql:host=localhost;dbname=jonathanbourdarias',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8')
                );

                $resultat = $pdo->prepare("SELECT * FROM admin WHERE pseudo = :pseudo AND mdp = :mdp");
                
                $resultat->execute(array(':pseudo' => $_POST['pseudo'], ':mdp' => $_POST['mdp']));                
                
                $admin = $resultat->fetch();

                if($admin){

                    session_start();

                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    $_SESSION['mdp'] = $_POST['mdp'];
                    
                    header('location:indexAdmin.php');
                    
                }else{
                    return $this->reponse .= '<div class="bg-danger text-white">Erreur sur les identifiants.</div>';
                }
            } // if(empty($this->message))
        } // Fin if (!empty($_POST))
    } // Fin connexionAdmin()

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setPseudo($pseudo){
        return $this->pseudo = $pseudo;
    }

    public function getMdp(){
        return $this->mdp;
    }

    public function setMdp($mdp){
        return $this->mdp = $mdp;
    }

} // Fin class Admin

?>