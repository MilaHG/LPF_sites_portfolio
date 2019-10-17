<?php

class ajoutExperience {

    private $titre;
    private $date;
    private $description;
    private $img;

    public function insertExperience($titre, $date, $descritpion, $img){
        
        $this->titre = strip_tags($titre);
        $this->date = strip_tags($date);
        $this->description = strip_tags($description);
        $this->img = strip_tags($img);

        require('vendor/connexion.php');

        $req = $pdo->prepare('INSERT INTO experiences (titre, date, description, img) VALUES (:titre, :date, :description, :img)');
        $req->execute([
            ':titre' => $this->titre,
            ':date' => $this->date,
            ':description' => $this->description,
            ':img' => $this->img]);
        $req->closeCursor();
    }
}

class supprimeExperience {

}

class modifExperience {
    
}