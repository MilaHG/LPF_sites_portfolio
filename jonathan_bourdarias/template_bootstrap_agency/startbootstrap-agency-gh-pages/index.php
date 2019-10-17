<?php

require('vendor/Contact.class.php');

// on vérifie que le formulaire a bien été posté
if (!empty($_POST)) {
    // on éclate le tableau avec la méthode EXTRACT(), ce qui nous permet d'accéder directement aux champs par des variables
    extract($_POST);

    // on effectue une validation des données du formulaire et notamment on vérifie la validité de l'email
    $valid = (empty($nom) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($telephone) || empty($message)) ? false : true; // écriture ternaire pour if / else
    $erreurnom = (empty($nom)) ? 'Veuillez saisir votre nom.' : null;
    $erreuremail = (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) ? 'Veuillez entrez un email valide.' : null;
    $erreurtelephone = (empty($telephone)) ? 'Veuillez renseignez votre telephone.' : null;
    $erreurmessage = (empty($message)) ? 'Veuillez indiquez votre message.' : null;

    // si tous les champs sont correctement renseignés
    if ($valid) {
        // on crée un nouvel objet (ou une instance) de la classe Contact.class.php
        $contact = new Contact();
// on utilise la méthode insertContact de la classe Contact.class.php
        $contact->insertContact($nom, $email, $telephone, $message);
    }
}

// Formulaire de connexion Admin :
?>
<h1>Connexion Admin</h1>
<form method="post" action="index.php">
  <label id="pseudo" for="pseudo" name="pseudo"></label>
  <input type="text" placeholder="Pseudo">

  <label id="mdp" for="mdp" name="mdp"></label>
  <input type="text" placeholder="Mot de passe">

  <input type="submit" placeholder="Se Connecter">
</form>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio - Jonathan BOURDARIAS</title>

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

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Jonathan BOURDARIAS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead parallax-container">
      <div class="parallax">
        <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in">Welcome To My Space !</div>
              <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="doc/CV_Jonathan(Assistant FabManager).pdf" download="">Télécharger mon CV</a>
            </div>        
        </div>
      </div>
    </header>

    <!-- Inter-sections -->
    <section id="intersection"></section>

    <!-- Compétences -->
    <section id="competences" class="shadow-lg parallax-container">
      <div class="parallax">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase text-white">Compétences</h2>
              <h3 class="section-subheading text-muted text-white">langages</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <!-- <i class="fas fa-circle fa-stack-2x text-warning"></i> -->
                <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                <i class="fab fa-html5 fa-2x text-success"></i>
              </span>
              <h4 class="service-heading text-success">HTML 5</h4>
              <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> -->
                <i class="fab fa-css3-alt fa-2x text-warning"></i>
              </span>
              <h4 class="service-heading text-warning">CSS 3</h4>
              <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-lock fa-stack-1x fa-inverse"></i> -->
                <i class="fab fa-js fa-2x text-danger"></i>
              </span>
              <h4 class="service-heading text-danger">JavaScript</h4>
              <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-lock fa-stack-1x fa-inverse"></i> -->
                <i class="fab fa-php fa-2x text-info"></i>
              </span>
              <h4 class="service-heading text-info">PHP</h4>
              <p class="text-muted"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Inter-sections -->
    <section id="intersection"></section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">Portfolio</h2>
            <h3 class="section-subheading text-muted text-white">Réalisations</h3>
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
          </div>
          <!-- <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Lines</h4>
              <p class="text-muted">Branding</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Southwest</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Inter-sections -->
    <section id="intersection"></section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">A Propos</h2>
            <h3 class="section-subheading text-muted text-white">Mon parcours</h3>
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
              <!-- <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="text-white">July 2014</h4>
                    <h4 class="subheading text-white">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Inter-sections -->
    <section id="intersection"></section>

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
              <!-- <p class="text-light">Lorem ipsum</p> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/Dragon-Ball.jpg" alt="">
              <h4 class="text-warning">Mangas</h4>
              <!-- <p class="text-light">Lorem ipsum</p> -->
            </div>
          </div>
          <div class="col-sm-4">            
            <div class="team-member">
              <img id="Blades" class="mx-auto rounded-circle" src="img/team/Dessin/Yamamoto.jpg" alt="">
                <h4 class="text-warning">Dessins</h4>
              <!-- <p class="text-light">Lorem ipsum</p> -->
            </div>            
          </div><!-- fin .col-sm-4 -->
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/DaftPunk.jpg" alt="">
              <h4 class="text-warning">Musique</h4>
              <!-- <p class="text-light">Lorem ipsum</p> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/PSG.jpg" alt="">
              <h4 class="text-warning">Sport</h4>
              <!-- <p class="text-light">Lorem ipsum</p> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/jojo-bizarre-adventure.jpg" alt="">
              <h4 class="text-warning">Jeux Video</h4>
              <!-- <p class="text-light">Lorem ipsum</p> -->
            </div>
          </div>
        </div><!-- fin .row -->
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <!-- <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p> -->
          </div>
        </div>
      </div><!-- fin .container -->
    </section>

    <!-- Inter-sections -->
    <section id="intersection"></section>

    <!-- Clients -->
    <!-- <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase text-white">Contactez Moi</h2>
            <h3 class="section-subheading text-light"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" method="POST" action="index.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="error"><?php if (isset($erreurnom)) echo $erreurnom; ?></span>
                    <input class="form-control text-white" id="name" type="text" name="nom" value="<?php if (isset($nom)) echo $nom; ?>" placeholder="Votre Nom" required="required" data-validation-required-message="Veuillez saisir votre nom.">
                    <p class="help-block text-white"></p>
                  </div>
                  <div class="form-group">
                    <span class="error"><?php if (isset($erreuremail)) echo $erreuremail; ?></span>
                    <input class="form-control text-white" id="email" type="email" name="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="Votre Email" required="required" data-validation-required-message="Veuillez saisir votre email.">
                    <p class="help-block text-white"></p>
                  </div>
                  <div class="form-group">
                    <span class="error"><?php if (isset($erreurtelephone)) echo $erreurtelephone; ?></span>
                    <input class="form-control text-white" id="phone" type="tel" name="telephone" value="<?php if (isset($sujet)) echo $sujet; ?>" placeholder="Votre Téléphone" required="required" data-validation-required-message="Veuillez saisir votre telephone.">
                    <p class="help-block text-white"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="error"><?php if (isset($erreurmessage)) echo $erreurmessage; ?></span>
                    <textarea class="form-control text-white" id="message" name="message"  placeholder="Votre Message" required="required" data-validation-required-message="Veuillez saisir un message."><?php if (isset($message)) echo $message; ?></textarea>
                    <p class="help-block text-white"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl" type="submit">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

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
                  <!-- <i class="fab fa-twitter"></i> -->
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <!-- <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li> -->
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
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
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
                  <!-- <p class="item-intro text-white">Lorem ipsum dolor sit amet consectetur.</p> -->
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
                  <!-- <p class="item-intro text-white">Lorem ipsum dolor sit amet consectetur.</p> -->
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
                  <!-- <p class="item-intro text-white">Lorem ipsum dolor sit amet consectetur.</p> -->
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
