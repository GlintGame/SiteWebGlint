<?php
    $lastVersionRef = route('addPost', ['version' => $versions->first()->name]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ URL::asset('img/Favicon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rosario" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <title>Glint</title>
</head>

<body>
    <nav class=" navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand mx-3 title" href="#">
            <img src="{{ URL::asset('img/icon-w.png') }}" width="30" height="30" alt="">
            GLINT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-center active">
                    <a class="nav-link px-3 px-md-4" href="{{ route('home') }}">ACCUIEL</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link px-3 px-md-4" href="{{ route('team') }}">L'EQUIPE</a>
                </li>
                <li class="nav-item text-center ">
                    <a class="nav-link px-3 px-md-4" href="{{ route('galery') }}">GALERIE</a>
                </li>
                <li class="nav-item text-center active">
                    <a href="{{$lastVersionRef}}"><button class="btn btn-outline-light mx-4 my-2 my-sm-0 px-4" type="link">TELECHARGER</button></a>
                </li>

        </div>
    </nav>
    <header class="d-flex justify-content-center align-items-center">
        <h1 class="title text-light">Glint</h1>
    </header>

    <section class="container text-light px-lg-5" style="position: relative; top: -10vh;">
        <div class="embed-responsive embed-responsive-16by9 bg-black">
            <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/sLFLuvwOTOY"
                allowfullscreen></iframe>
        </div>
        <h2 class="title text-center text-uppercase my-5">a propos</h2>
        <div class="row justify-content-center">
            <p class=" col-md-10 px-lg-5"> Dans un monde rongé par le mal, naît une flamme parmi les ombres. Son destin
                : le sauver de la malédiction. <br>
                Bienvenue sur le site de Glint, un jeu indépendant en développement depuis septembre 2018 créé par 6
                étudiants en MMI.
            </p>
        </div>
    </section>

    <section class="container-fluid text-light bg-forest">
        <div class="row flex-column justify-content-center align-items-center" style="min-height:80vh">
            <p class=" col-12 text-center p-3 p-lg-5 slogan">Envie de vous lancer dans l’aventure ? <br> De contribuer
                au développement du jeu ? <br> Téléchargez, jouez, commentez !</p>
            <button type="button" class="btn btn-outline-light btn-lg">Télecharger le jeu</button>
        </div>
    </section>

    <footer class="container-fluid mt-5">
        <div class="row py-5">
            <div class="col-sm-6 m-3 m-sm-0 text-light text-center border-right">
                <h2 class="mb-4">Retrouvez nous sur :</h2>
                <a href="https://www.facebook.com/glintgame"><img class="logo" src="img/facebook.svg" alt="facebook"></a>
                <a href="https://twitter.com/glintgame"><img class="logo" src="img/twitter.svg" alt="twitter"></a>
                <a href="https://www.instagram.com/glintgame/"><img class="logo" src="img/instagram.svg" alt="instagram"></a>
            </div>
            <div class="col-sm-6  m-3 m-sm-0 text-light text-center border-left">
                <h2 class="mb-4">L'équipe de glint :</h2>

                <p class="mb-0">Charline - Théo W. </p>
                <p class="mb-0">Marc-Antoine - Léon</p>
                <p class="mb-0">Emilien - Théo L.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-light text-center bg-black"> Glint - Tous droit reserve</div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>


<script>
    var nav = document.querySelector("nav.navbar");
    window.addEventListener('scroll', function () {
        "use strict";
        if (window.scrollY >= 150) {
            nav.classList.add("bg-black");
            nav.classList.remove("bg-transparent");
        } else {
            nav.classList.add("bg-transparent");
            nav.classList.remove("br-black");
        }
    });
    

</script>

</body>

</html>
