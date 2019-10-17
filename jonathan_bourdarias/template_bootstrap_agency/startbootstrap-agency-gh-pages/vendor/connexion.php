<?php
try{
     $pdo = new PDO('mysql:host=localhost;dbname=site_portfolio', 'root', '') or die(print_r($pdo->errorInfo()));
     // force la prise en charge de l'utf-8 
     $pdo->exec('SET NAMES utf8');
} catch(Exception $e){
     die('Erreur à debugger : ' . $e->getMessage());
}