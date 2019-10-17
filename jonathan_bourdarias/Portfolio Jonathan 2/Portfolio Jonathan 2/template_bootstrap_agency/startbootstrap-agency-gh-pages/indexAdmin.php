<?php

require('vendor/init.inc.php');

// Instanciation de la class DeconnexionAdmin

if(isset($_GET['deconnexion'])){

 // var_dump($_GET['deconnexion']);

  $deco = new DeconnexionAdmin;

  $deco->deconnexionAdmin();
}else{
  // var_dump($_GET);
}

// Vérifications du formulaire d'ajout d'une Compétence :
if(!empty($_POST)){

  extract($_POST);

  $valid = (empty($competence) || empty($logo)) ? false : true;
  $erreurcompetence = (empty($competence)) ? 'Saisir une compétence' : null;
  $erreurlogo = (empty($logo)) ? 'Selectionner un logo' : null;

  if($valid) {

    require('vendor/Competence.php');

    $comp = new AjoutCompetence();

    $comp->insertCompetence($competence, $logo);
  }
}

// Vérification du formulaire d'ajout d'une Réalisation (Portfolio) :
if(!empty($_POST)){

  extract($_POST);

  $valid = (empty($titre) || empty($date) || empty($description) || empty($img)) ? false : true;
  $erreurtitre = (empty($titre)) ? 'Saisir un titre' : null;
  $erreurdate = (empty($date)) ? 'Saisir une date' : null;
  $erreurdescription = (empty($description)) ? 'Saisir une description' : null;
  $erreurimg = (empty($img)) ? 'Selectionner une image' : null;

  if ($valid) {

    require('vendor/Realisation.php');

    $real = new ajoutRealisation;

    $real->insertRealisation($titre, $date, $description, $img);
  }
}

// Vérification du formulaire d'ajout d'une Expérience :
  if(!empty($_POST)){

    extract($_POST);

    $valid = (empty($titre) || empty($date) || empty($description) || empty($img)) ? false : true;
    $erreurtitre = (empty($titre)) ? 'Saisir un titre' : null;
    $erreurdate = (empty($date)) ? 'Saisir une date' : null;
    $erreurdescription = (empty($description)) ? 'Saisir une description' : null;
    $erreurimg = (empty($img)) ? 'Selectionner une image' : null;

    if ($valid) {

      require('vendor/Experience.php');

      $exp = new ajoutExperience;

      $exp->insertExperience($titre, $date, $description, $img);
    }
  }

// Vérification du formulaire d'ajout d'un Loisir :
  if(!empty($_POST)){

    extract($_POST);

    $valid = (empty($titre) || empty($img)) ? false : true;
    $erreurtitre = (empty($titre)) ? 'Saisir un titre' : null;
    $erreurimg = (empty($img)) ? 'Selectionner une image' : null;

    if ($valid) {

      require('vendor/Loisir.php');

      $exp = new ajoutLoisir;

      $exp->insertLoisir($titre, $img);
    }
  }

  // Affichage Messages :

  $resultat = $pdo->query("SELECT * FROM contact");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio - Jonathan BOURDARIAS - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <button type="button" class="btn btn-secondary rounded-circle mr-5" name="deconnexion" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-power-off"></i></button>
        
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Jonathan BOURDARIAS</a>
        <button class="navbar-toggler navbar-toggler-right text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" <?php  ?>>
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">A Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Loisirs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <div class="text-white"><?php  ?></div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in">Welcome To My Space !</div>
              <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
              <a class="btn btn-primary btn-xl js-scroll-trigger badge" href="doc/CV_Jonathan(Assistant FabManager).pdf" download="">Télécharger mon CV</a>
            </div>        
        </div>
    </header>

        <div id="intersection" class="scroll1"></div>

    <header class="masthead parallax"></header>

    <!-- Inter-sections -->
    <section id="intersection" class="scroll1"></section>

    <!-- Compétences -->
    <section id="competences" class="shadow-lg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">Compétences</h2>
            <h3 class="section-subheading text-muted text-white"></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fab fa-html5 fa-2x text-success"></i>
            </span>
            <h4 class="service-heading text-success">HTML 5</h4>
            <p class="text-muted"></p>
            <div class="text-white ml-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fab fa-css3-alt fa-2x text-warning"></i>
            </span>
            <h4 class="service-heading text-warning">CSS 3</h4>
            <p class="text-muted"></p>
            <div class="text-white ml-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fab fa-php fa-2x text-info"></i>
            </span>
            <h4 class="service-heading text-info">PHP</h4>
            <p class="text-muted"></p>
            <div class="text-white ml-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
        </div>
        <div class="text-white">
          <button type="button" class="btn btn-secondary rounded-circle mr-5 mt-5" name="ajoutCompetence" data-toggle="modal" data-target=".bd-example-modal-sm2"><i class="fas fa-plus-circle"></i></button>
        </div>
      </div>
    </section>

    <div id="intersection" class="scroll2"></div>
    
    <section id="competences" class="shadow-lg parallax"></section>

    <!-- Inter-sections -->
    <section id="intersection" class="scroll2"></section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">Portfolio</h2>
            <h3 class="section-subheading text-muted text-white"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/screenshot_jurassic2.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Jurassic World</h4>
              <p class="text-muted">Maquette Jurassic</p>
            </div>
            <div class="text-white m-3 ml-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/screenshot_blog_dessin.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Blog à dessin</h4>
              <p class="text-muted">Réalisation personnelle</p>
            </div>
            <div class="text-white m-3 ml-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/screenshot_i_phone.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>iPhone</h4>
              <p class="text-muted">Maquette iPhone</p>
            </div>
            <div class="text-white m-3 ml-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mt-5 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid img-hover" src="img/portfolio/screenshot_unicorns.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Licornes</h4>
              <p class="text-muted">Maquette Unicorns</p>
            </div>
          </div>
        </div>
        <div class="text-white">
          <button type="button" class="btn btn-secondary rounded-circle mt-2 ml-3" name="ajoutRealisation" data-toggle="modal" data-target=".bd-example-modal-sm3"><i class="fas fa-plus-circle"></i></button>
        </div>
      </div>
    </section>

    <div id="intersection" class="scroll3"></div>

    <section class="bg-light parallax" id="portfolio"></section>

    <!-- Inter-sections -->
    <section id="intersection" class="scroll3"></section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">A Propos</h2>
            <h3 class="section-subheading text-muted text-white"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Bac
                    <br>STG
                    <br>Mercatique</h4>
                </div>
              </li>
              <li>
                <div class="text-white ml-5">
                  <button type="button" class="btn btn-secondary rounded-circle text-right mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
                  <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
                </div>
                <div class="timeline-image">
                  <img id="img-notaire" class="rounded-circle img-fluid" src="img/sceau-notaire.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="text-white">2010-2012</h4>
                    <h4 class="subheading text-white">BTS Notariat</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Lycée Toulouse-Lautrec de Vaucresson</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="text-white ml-5">
                  <button type="button" class="btn btn-secondary rounded-circle text-right mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
                  <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
                </div>
                <div class="timeline-image">
                  <img id="img-carrefour" class="rounded-circle img-fluid" src="img/Carrefour-city.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="text-white">2014-2016</h4>
                    <h4 class="subheading text-white">Carrefour City</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Employé libre service en CDD puis CDI</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="text-white ml-5">
                  <button type="button" class="btn btn-secondary rounded-circle text-right mr-5 mt-2 mb-2" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
                  <button type="button" class="btn btn-secondary rounded-circle text-right mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
                </div>
                <div class="timeline-image">
                  <img id="img-lepoles" class="rounded-circle img-fluid" src="img/Lepoles.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="text-white">Juin 2018</h4>
                    <h4 class="subheading text-white">Le PoleS</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Formation de Développeur/ Intégrateur Web au PoleS de Villeneuve-La-Garenne</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="text-white align-text-right">
          <button type="button" class="btn btn-secondary rounded-circle mr-5" name="ajoutExperience" data-toggle="modal" data-target=".bd-example-modal-sm4"><i class="fas fa-plus-circle"></i></button>
        </div>
      </div>
    </section>

    <div id="intersection" class="scroll4"></div>

    <section id="about" class="parallax"></section>

    <!-- Inter-sections -->
    <section id="intersection" class="scroll4"></section>

    <!-- Loisirs -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">Loisirs</h2>
            <h3 class="section-subheading text-white"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/breaking-bad.jpg" alt="">
              <h4 class="text-warning">Séries</h4>
            </div>
            <div class="text-white ml-5 mb-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-2 mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/Dragon-Ball.jpg" alt="">
              <h4 class="text-warning">Mangas</h4>
            </div>
            <div class="text-white ml-5 mb-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-2 mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-sm-4">            
            <div class="team-member">
              <img id="Blades" class="mx-auto rounded-circle" src="img/team/Dessin/Yamamoto.jpg" alt="">
                <h4 class="text-warning">Dessins</h4>
            </div>
            <div class="text-white ml-5 mb-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-2 mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>            
          </div><!-- fin .col-sm-4 -->
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/DaftPunk.jpg" alt="">
              <h4 class="text-warning">Musique</h4>
            </div>
            <div class="text-white ml-5 mb-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-2 mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/PSG.jpg" alt="">
              <h4 class="text-warning">Sport</h4>
            </div>
            <div class="text-white ml-5 mb-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-2 mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/jojo-bizarre-adventure.jpg" alt="">
              <h4 class="text-warning">Jeux Video</h4>
            </div>
            <div class="text-white ml-5 mb-5">
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-5 mr-5" name="modifCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-recycle"></i></button>
              <button type="button" class="btn btn-secondary rounded-circle text-right ml-2 mr-5" name="supprimeCompetence" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-minus-circle"></i></button>
            </div>
          </div>
        </div><!-- fin .row -->
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
          </div>
        </div>
        <div class="text-white">
          <button type="button" class="btn btn-secondary rounded-circle" name="ajoutLoisir" data-toggle="modal" data-target=".bd-example-modal-sm5"><i class="fas fa-plus-circle"></i></button>
        </div>
      </div><!-- fin .container -->
    </section>

    <div id="intersection" class="scroll5"></div>

    <section class="bg-light parallax" id="team"></section>

    <!-- Inter-sections -->
    <section id="intersection" class="scroll5"></section>


    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <h2 class="section-heading text-uppercase text-center text-white">Messagerie</h2>
        <h3 class="section-subheading text-white"></h3>
        <table class="table border border-white">
          <thead class="thead text-white">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Email</th>
              <th scope="col">Téléphone</th>
              <th scope="col">Message</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            while ($contact = $resultat->fetch(PDO::FETCH_ASSOC)){                
              echo '<tr>';
                foreach ($contact as $info){
                  echo '<td class="text-white">' . $info . '</td>';
                }
              echo '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>

    <div id="intersection" class="scroll6"></div>

    <section id="contact" class="parallax"></section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Jonathan BOURDARIAS 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://github.com/Jonathan3001" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/jonathan-bourdarias" target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <!-- <a href="#">Privacy Policy</a> -->
              </li>
              <li class="list-inline-item">
                <a href="#">Retour en haut de page</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-white">Jurassic World</h2>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/TP6_jurassic_maquette.png" alt="">
                  <p class="text-white">Réalisation sur la base d'une maquette.</p>
                  <ul class="list-inline">
                    <li class="text-white">Date: Septembre 2018</li>
                    <li class="text-white">Client: LePoleS</li>
                    <li class="text-white">Category: Maquette</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-white">Blog à dessin</h2>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/maquette_blog_dessins.jpg" alt="">
                  <p class="text-white">Blog de présentation de mes dessins<br>Il s'agit exclusivement de dessins faits entièrement à la main ! Les outils utilisés peuvent différer !</p>
                  <ul class="list-inline">
                    <li><a href="https://jonathan3001.github.io" target="_blank">Accèder au blog</a></li>
                    <li class="text-white">Date: Aout 2018</li>
                    <!-- <li>Client: Explore</li> -->
                    <li class="text-white">Category: Réalisation personnelle</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-white">iPhone 7</h2>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/SiteWebApple.jpg" alt="">
                  <p class="text-white">Réalisation sur la base d'une maquette</p>
                  <ul class="list-inline">
                    <li class="text-white">Date: Aout 2018</li>
                    <li class="text-white">Client: LePoleS</li>
                    <li class="text-white">Category: Maquette</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-white">Project Name</h2>
                  <p class="item-intro text-white">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-white">Project Name</h2>
                  <p class="item-intro text-white">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase text-white">Project Name</h2>
                  <p class="item-intro text-white">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Loisir Modal 1 -->
    <!-- <div class="loisir-modal modal fade" id="loisirModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body"> -->
                  <!-- Project Details Go Here -->
                  <!-- <h2 class="text-uppercase text-white">Séries</h2>
                  <img class="img-fluid d-block mx-auto" src="img/team/breaking-bad.jpg" alt="">
                  <p class="text-white">Breaking Bad</p>
                  <ul class="list-inline">
                    <li class="text-white">Créateur: Vince Gilligan</li>
                    <li class="text-white">Date: De 2008 à 2013</li>
                    <li class="text-white">Diffuseur: AMC</li>
                    <li class="text-white">Categorie: Drame, Policier, Thriller, Comédie noire</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Modal Déconnexion -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content"> 
          <form action="indexAdmin.php" method="get" id="deconnexionAdmin" class="form-group col-12 mt-2">

            <input type="hidden" name="deconnexion" value="deconnexion">

            <input type="submit" value="Deconnexion" class="btn mt-2 offset-4">
          </form>       
        </div>
      </div>
    </div>

    <!-- Modal Ajout Compétence -->
    <div class="modal fade bd-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form id="ajoutCompetence" method="post" action="indexAdmin.php" enctype="multipart/form-data" class="form-group col-12 mt-3">
            <div class="form-row">
              <input type="hidden" name="id_competence" value="0">

              <input type="text" id="competence" name="competence" class="form-control mb-2" placeholder="Compétence">
  
              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile03 logo" name="logo" aria-describedby="">
                  <label class="custom-file-label" for="inputGroupFile03">Logo - Cliquer pour ajouter un fichier</label>
                </div>
              </div>
              <!-- <input type="text" class="form-control mb-2" id="logo" name="logo" placeholder="Logo"> -->

              <input type="submit" name="ajoutCompetence" placeholder="Ajouter" class="btn offset-5 text-info" value="Ajouter">
            </div>
          </form>              
        </div>
      </div>
    </div>

    <!-- Modal Ajout Réalisation -->
    <div class="modal fade bd-example-modal-sm3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form id="ajoutRealisation" method="post" action="indexAdmin.php" enctype="multipart/form-data" class="form-group col-12 mt-4">
            <div class="form-row">
              <input type="hidden" name="id_realisation" value="0">

              <input type="text" id="titre" name="titre" class="form-control mb-2" placeholder="Titre">

              <input type="text" id="date" name="date" class="form-control mb-2" placeholder="Date">

              <input type="text" id="description" name="description" class="form-control mb-2" placeholder="Description">

              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile03 img" name="img" aria-describedby="">
                  <label class="custom-file-label" for="inputGroupFile03">Image - Cliquer pour ajouter un fichier</label>
                </div>
              </div>

              <input type="submit" name="ajoutRealisation" placeholder="Réalisation" class="btn offset-5 text-info" value="Ajouter">
            </div>
          </form>              
        </div>
      </div>
    </div>

    <!-- Modal Ajout Experience -->
    <div class="modal fade bd-example-modal-sm4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form id="ajoutExperience" method="post" action="indexAdmin.php" enctype="multipart/form-data" class="form-group col-12 mt-4">
            <div class="form-row">
              <input type="hidden" name="id_experience" value="0">

              <input type="text" id="titre" name="titre" class="form-control mb-2" placeholder="Titre">

              <input type="text" id="date" name="date" class="form-control mb-2" placeholder="Date">

              <input type="text" id="description" name="description" class="form-control mb-2" placeholder="Description">

              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile03 img" name="img" aria-describedby="">
                  <label class="custom-file-label" for="inputGroupFile03">Image - Cliquer pour ajouter un fichier</label>
                </div>
              </div>

              <input type="submit" name="ajoutExperience" placeholder="Expérience" class="btn offset-5 text-info" value="Ajouter">
            </div>
          </form>              
        </div>
      </div>
    </div>

    <!-- Modal Ajout Loisir -->
    <div class="modal fade bd-example-modal-sm5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form id="ajoutLoisir" method="post" action="indexAdmin.php" enctype="multipart/form-data" class="form-group col-12 mt-4">
            <div class="form-row">
              <input type="hidden" name="id_loisir" value="0">

              <input type="text" id="titre" name="titre" class="form-control mb-2" placeholder="Titre">

              <div class="input-group mb-3">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile03 img" name="img" aria-describedby="">
                  <label class="custom-file-label" for="inputGroupFile03">Image - Cliquer pour ajouter un fichier</label>
                </div>
              </div>

              <input type="submit" name="ajoutLoisir" placeholder="Loisir" class="btn offset-5 text-info" value="Ajouter">
            </div>
          </form>              
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>