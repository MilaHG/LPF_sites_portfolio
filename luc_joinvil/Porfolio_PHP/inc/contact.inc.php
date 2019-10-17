<body id="bodyContact">

<nav class="navbar mt-3 effet">
  <a class="btn navbar-brand ml-5  border-success  rounded-circle" href="index.php"><i class="fas fa-home home"></i></a>
  <a class="btn border-warning mr-5" href="?lien=formations">Formations</a>
  <a class="btn border-danger mr-5" href="?lien=competences">Compétences</a>
  <a class="btn border-info mr-5" href="?lien=creations">Réalisations</a>
  <a class="btn border-primary mr-5" href="?lien=luc">A Propos</a>
  <a class="btn border-success bg-success mr-5" href="?lien=contact">Contacts</a>
</nav>

<div class="container mx-auto stylef mt-5">

<div class="row">
    <div class="col-12 mt-4">
        <h1 class="text-white text-center">ME CONTACTER</h1>
    </div>

    <div class="col-12 btn btn-success" id="message"></div>
</div>

 <div class="row mt-3">
            <div class="col-6">
                <form action="" method="POST" id="form">
                    <div class="form-group p-3">
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
                    </div>

                    <div class="form-group p-3">
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
                    </div>
                    <div class="form-group p-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <!-- <div class="form-group p-3">
                        <input type="phone" name="telephone" id="telephone" class="form-control" placeholder="Télephone">
                    </div> -->
                    <div class="form-group p-3">
                        <textarea type="text" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group p-3">
                        <button type="submit" id="submit" name="submit" class="form-control btn btn-success">Envoyer</button>
                    </div>
                </form>
            </div>



            <div class="col-5 offset-1 text-white text-center contact mt-5 mb-5">
              <h3 class="mt-5">Vous pouvez me contacter</h3>

                <p class="p-3"><i class="fas fa-mobile-alt "></i> : (+33) 7 53 41 25 53</p>
                <p class="p-2"><i class="fas fa-envelope "></i> : lucmerlentzjoinvil@gmail.com</p>
                <p class="p-2"> <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><i class="fab fa-linkedin "></i> : Luc Merlentz Joinvil</a> </p>
            </div>
        </div>


  <?php  ?>  
</div>
    
</body>

