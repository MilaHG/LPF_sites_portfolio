<?php

// require 'init.inc.php';

class ajoutRealisation {

    private $titre;
    private $date;
    private $description;
    private $img;

    public function insertRealisation($titre, $date, $description, $img){

        $this->titre = strip_tags($titre);
        $this->date = strip_tags($date);
        $this->description = strip_tags($description);
        $this->img = strip_tags($img);

        require('vendor/connexion.php');

        $req = $pdo->prepare('INSERT INTO realisations (titre, date, description, img) VALUES (:titre, :date, :description, :img)');
        $req->execute([
            ':titre' => $this->titre,
            ':date' => $this->date,
            ':description' => $this->description,
            ':img' => $this->img]);
        $req->closeCursor();
    }
}

class supprimeRealisation {

}

class modifRealisation {
    
}