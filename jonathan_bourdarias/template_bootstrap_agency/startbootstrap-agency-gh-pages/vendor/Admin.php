<?php
require 'connexion.php';

class Admin{
    public $pseudo;
    public $mdp;

    public function __construct(){}

    public function connexion(){
        $message = '';

        if(!empty($_POST)){
            if(!isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 2 || strlen($_POST['pseudo']) > 30) $message .= '<p>Le pseudo doit comporter entre 2 et 30 caractères !</p>';
        }

        if(!empty($_POST)){
            if(!isset($_POST['mdp']) || strlen($_POST['mdp']) < 2 || strlen($_POST['mdp']) > 20) $message .= '<p>Le mot de passe doit comporter entre 2 et 20 caractères !</p>';
        }
    }

    public function accesBackOffice(){}
}