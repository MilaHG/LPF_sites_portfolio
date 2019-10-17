<?php

include '../../contactFormSabuj/configDB.php';

// ce une function pour execute le requte ______________________
function executeRequete($requete, $param = array()){
    if(!empty($param)) { // si j'ai bien reçu un array rempli, je peux faire la foreach dessus pour transformer les cractères spéciaux en entités HTML :
        foreach($param as $indice => $valeur){
            $param[$indice] = htmlspecialchars($valeur, ENT_QUOTES); // pour éviter les injection css et JS
        }
    }
    
    global $pdo; // permet d'avoir accès à la variable $pdo définie dans l'espace global(à l'extérieur de la function)
    $resultat = $pdo->prepare($requete); // ici on prepare la requete fournie lors de l'apple la function
    $resultat->execute($param); // on execute en liant les marqueurs aux valeurs qui se trouvent dans l'array$param fourni lors de l'appel de la fonction  

    return $resultat; // on  retourne l'objet pdo statement à l'endroit ou la fonction executeRequete est appelée.
}
// ______________________________________________________

// var_dump($_POST);
// echo '<br>';
// var_dump($_FILES);

$msgDesc = '';

if($_POST){

    foreach($_POST as $indice => $valeur) {
        $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES); //pour eviter les injections CSS ET JS
    }

    $photo_bdd = '';

    if(!empty($_FILES['photo']['name'])){ 
        $nom_photo = $_FILES['photo']['name']; 
        $photo_bdd = 'photo/' . $nom_photo; 
        copy($_FILES['photo']['tmp_name'], '' . $photo_bdd); 
    } else{
        $msgDesc = 'hello';
    }
    

    if(!empty($photo_bdd)){
        $requete = $pdo->prepare("INSERT INTO competences(photo, cDescription) VALUES(:photo, :cDescription)");
            
        $requete->bindparam(':photo', $photo_bdd);
        $requete->bindparam(':cDescription', $_POST['cDescription']);

        $result = $requete->execute();

        // unset($_POST['photo']);
        // unset($_POST['cDescription']);

        // header('Location: index.php');
        // exit();

        header("Location: $PHP_SELF");
        die();  

    }

}




if(isset($_GET['link']) && $_GET['link'] == 'suppression' && isset($_GET['idCompetence'])){ // is existe l'index "action" dans $_GET et que sa valeur est "suppression" et que existe aussi l'index "id_produit", alors je peux traiter la suppression du produit demandé

    // $requete2 = $pdo->query("SELECT * FROM competences");

    $resultat = executeRequete("DELETE FROM competences WHERE idCompetence = :idCompetence", array(':idCompetence' => $_GET['idCompetence']));

    if($resultat->rowCount() == 1){
        // si le DELETE retourne 1 ligne, c'est l'id_produit  existant et qu'il a pu être suprimé :
        echo '<div class="alert alert-success">Le produit n° '.$_GET['idCompetence'].' a bien été supprime</div>';
    } else {
        // sinon c'est que l'id_produit n'existe pas ou plus
        echo '<div class="alert alert-danger">Error lors de la supression de produit n° '.$_GET['idCompetence'].'</div>';
    }

}

?>
<!-- fin de php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="lib/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <title>Compétences</title>
    <style>
        span{
            color: red;
        }
        div img{
            height: 6rem;
            width: 6rem;
            text-align: center;
            margin-bottom: 2rem;
            /* margin: 10rem 0rem 0rem 8rem; */
        }
    </style>
</head>
<body>
    <div class="container boCompetence">
        <h2 class="text-center pt-3 mb-3 text-info"><u>Compétences</u></h2>
        <div class="">

            <?php
                // unset($_POST['photo']);
                // unset($_POST['cDescription']);
            ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group col-md-10 offset-1 mb-4">
                    <span><?php echo $msgDesc; ?></span>
                    <br>
                    <input type="file" name="photo" value="<?php echo $_POST['photo'] ?? ''; ?>" class="form-control-file btn-outline-info rounded">
                </div>
                <div class="form-group col-md-10 offset-1 mb-4">
                    <input type="text" name="cDescription" value="<?php echo $_POST['cDescription'] ?? ''; ?>" placeholder="Description (facultatif)"  class="form-control border-info">
                </div>
                <div class="col-md-6 offset-3">
                    <button type="submit" class="btn btn-block btn-outline-info">Submit</button>
                </div>
            </form>
        </div>

        <h2 class="text-center mt-5 pt-5 mb-3 text-info"><u>Tableau d'affichage les Compétences</u></h2>

                    <!-- PHP pour afficher les compétence dynamiquement -->

                    <div class="row">
                        <?php
                            $affichage = $pdo->query("SELECT * FROM competences");
                        ?>
                        <?php
                            while($competences = $affichage->fetch(PDO::FETCH_ASSOC)){
                                // foreach($affichage as $index => $valeur){
                        ?>
                                <div class="col-lg-2 offset-1 test fadeInOut">
                                    <!-- <a href=""><i class="fas fa-trash-alt"></i></a> -->
                                    <img src="<?php echo $competences['photo']; ?>" alt="">
                                    <p><?php echo $competences['cDescription']; ?></p>
                                    <?php
                                // } 
                                        echo '<a href="?link=suppression&idCompetence='.$competences['idCompetence'].'"  onclick="return(confirm(\'Etes vous certain de vouloir supprimer ce produit ?\'))"><i class="fas fa-trash-alt"></i></a>'; 
                                    ?>
                                </div>
                        <?php
                                
                            }
                        ?> 

                    </div>
                    <!-- /.row -->

    </div>
    
</body>
</html>