<?php
/**
 * Created by PhpStorm.
 * User: Mila
 * Date: 22/11/2018
 * Time: 10:30
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="sitepf.css" />
<!--    <script src="main.js"></script>-->



</head>
<body> <!-- presentation -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light   fixed-top" style="background-color: rgba(41, 40, 40, 0.2);">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="navbar-brand" href="#Realisation">
                        Mes Realisation
                    </a>

                    <a class="nav-item nav-link" href="#">Contact</a>
                    <a class="navbar-brand" href="#">
                        <span>Moi</span>
                    </a>

                    <a class="navbar-brand" href="#">
                        <i class="fab fa-linkedin-in"></i></a>

                </div>
            </div>
        </div>
        <!-- Div container 2-->
    </nav>
    <!-- <div class="container"> -->
    <div class="row">

        <div class="card bg-dark text-white">
            <img class="card-img " src="acceuil.jpg" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <p class="card-text"></p>
            </div>
        </div>

    </div> <!--FIN ROW-->
    <!-- </div>FIN container -->


    <div class="container">
        <div class="row">
            <div class="col" id="Realisation">
                <h1>  Mes Realisation</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="02.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="01.png" alt="Second slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="02.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->



    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <button class="btn">Cliquer pour voir les compétences</button>
                <br>
                <br>

                <div id="div1" class="progress" style="display:none;">
                    <h2><i class="fab fa-html5"></i></h2>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0"
                         aria-valuemax="100">70%</div>
                </div>

                <br>

                <h2><i class="fab fa-css3-alt"></i></h2>
                <div id="div2" class="progress" style="display:none;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                         aria-valuemax="75">75%</div>
                </div>

                <br>

                <h2><i class="fab fa-js-square" style="display:none;"></i></h2>
                <div id="div3" class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="30">30%</div>
                </div>

                <br>

                <h2><i class="fab fa-php"></i></h2>
                <div  id="div4" class="progress" style="display:none;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">75%</div>
                </div>
                <br>

                <h2>SQL</h2>
                <div id="div5" class="progress" style="display:none;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0"
                         aria-valuemax="100">70%</div>
                </div>

            </div>
            <!-- /.col12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div id="clickme">
                    Cliquer là
                </div>
                <img id="logo" src="lePolesF.jpg" alt="" width="100" height="123">

<!--                // With the element initially hidden, we can show it slowly:-->
<!--                $( "#clickme" ).click(function() {-->
<!--                $( "#book" ).fadeIn( "slow", function() {-->
<!--                // Animation complete-->
<!--                });-->
<!--                });-->
            </div>
        </div>
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".btn").click(function () {
                $("#div1:hidden:first").fadeIn();
                $("#div2").fadeIn("slow");
                $("#div3").fadeIn(3000);
                // $("#div4").fadeIn(4000);
                // $("#div5").fadeIn(5000);
            });

            // With the element initially hidden, we can show it slowly:
            $( "#clickme" ).click(function() {
                $( "#logo" ).fadeOut( "slow");
            });
        });
    </script>
</body>
</html>
