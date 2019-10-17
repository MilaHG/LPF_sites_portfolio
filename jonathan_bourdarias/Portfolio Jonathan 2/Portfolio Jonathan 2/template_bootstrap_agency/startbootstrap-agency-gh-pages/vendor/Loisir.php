<?php

class ajoutLoisir {

    private $titre;
    private $img;

    public function insertLoisir($titre, $img){
        
        $this->titre = strip_tags($titre);
        $this->img = strip_tags($img);

        require('vendor/connexion.php');

        $req = $pdo->prepare('INSERT INTO loisirs (titre, img) VALUES (:titre, :img)');
        $req->execute([
            ':titre' => $this->titre,
            ':img' => $this->img]);
        $req->closeCursor();
    }
}

class supprimeLoisir {

}

class modifLoisir {
    
}