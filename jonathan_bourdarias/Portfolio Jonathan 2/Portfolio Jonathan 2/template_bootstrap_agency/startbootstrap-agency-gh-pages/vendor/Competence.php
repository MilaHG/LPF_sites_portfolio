<?php

class ajoutCompetence {

    private $competence;
    private $logo;

    public function insertCompetence($competence, $logo){
        $this->competence = strip_tags($competence);
        $this->logo = strip_tags($logo);

        require('vendor/connexion.php');

        $req = $pdo->prepare('INSERT INTO competences (competence, logo) VALUES (:competence, :logo)');
        $req->execute([
            ':competence' => $this->competence,
            ':logo' => $this->logo]);
        $req->closeCursor();
    }
}

class supprimeCompetence {

}

class modifCompetence{
    
}