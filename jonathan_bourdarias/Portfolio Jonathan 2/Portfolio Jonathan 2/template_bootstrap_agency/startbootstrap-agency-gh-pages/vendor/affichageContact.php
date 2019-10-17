<?php

// class Affichage {

//     // public $contact;

//     public function showMessage($contact){

//         require('vendor/connexion.php');

//         $resultat = $pdo->query("SELECT nom, email, telephone, message FROM contact");

//         $donnees = $resultat->fetchAll(PDO::FETCH_ASSOC); // retourne toutes les lignes de résultats dans un tableau multidimentionnel : on a un sous-array associatif à chaque indice numérique de $donnees. On peut mettre aussi FETCH_NUM pour des sous-array indicés numériquement ou fetchAll() pour des sous-array numériques et associatifs.

//         var_dump($donnees);

// // On parcourt $donnees avec une boucle foreach pour en afficher le contenu :
//         foreach ($donnees as $contact){
//     // debug($employe); // $employe correspond à chaque sous-array associatif contenu dans $donnees
//             extract($donnees);
            
            
        
//     }
// }