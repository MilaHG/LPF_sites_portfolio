<?php

/*
 * Une classe c'est en fait un plan à partir duquel on va pouvoir créer plusieurs objets
 * un peu comme un moule dont on en obtient comme objets des gâteaux
 *
 * Une classe peut contenir plusieurs méthodes (ou fonctions)
 * par ex. une classe voiture peut avoir comme méthodes 'freiner' et 'accélerer'
 * et quand je créé un objet de la classe voiture, par ex. un 308 ou une porsche qui auront les
 * fonctionnalités de la classe voiture comme 'freiner' et 'accélerer'
 */

class Contact {

    //variable privée, on ne peut modifier la variable qu'en passant par les méthodes de la class Contact
    private $nom;
    private $email;
    private $telephone;
    private $message;

    // fonction d'insertion dans la BDD
    public function insertContact($nom, $email, $telephone, $message) {

// on récupère les données rentrées par l'utilisateur
        $this->nom = strip_tags($nom);
        $this->email = strip_tags($email);
        $this->telephone = strip_tags($telephone);
        $this->message = strip_tags($message);

        // on requiert le fichier connexion.php qui contient l'accès à la BDD
        require('vendor/connexion.php');

        // on créé une requête puis on l'exécute
        $req = $pdo->prepare('INSERT INTO contact (nom, email, telephone, message, date) VALUES (:nom, :email, :telephone, :message, NOW())');
        $req->execute([
            ':nom' => $this->nom, // on attribue à ma variable la valeur de l'objet instancié, le nom de l'auteur du message qui vient d'être posté
            ':email' => $this->email,
            ':telephone' => $this->telephone,
            ':message' => $this->message]);
        // on ferme la requête (protection c/ les injections)
        $req->closeCursor();
    }
}
