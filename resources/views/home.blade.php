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
    <title>Glint</title>
    <style>
        body{
        background: #212529;

    }
    img.logo {
            width: 50px;
            margin: 10px;
            opacity: 0.8;
            transition: opacity 0.2s ease-in;
        }
        img.logo:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <nav class=" navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">GLINT</a>
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
                <li class="nav-item text-center">
                    <a href=""><button class="btn btn-outline-light mx-4 my-2 my-sm-0 px-4" type="link">TELECHARGER</button></a>
                </li>

        </div>
    </nav>
    <header class="d-flex justify-content-center align-items-center" style="min-height:90vh;">
        <h1 class="display-1 text-light">Glint</h1>
    </header>
    
    <section class="container text-light px-lg-5">
        <div class="embed-responsive embed-responsive-16by9 ">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sLFLuvwOTOY" allowfullscreen></iframe>
        </div>
        <h2 class="display-3 text-center text-uppercase mt-4">à propos</h2>
        <p class="p-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, omnis. Numquam facilis explicabo amet non, perferendis pariatur accusamus cupiditate beatae iure esse? Molestiae, cupiditate odit! Saepe, facere quae quibusdam facilis repellat quam sit? Itaque.  </p>
    </section>
    <section class="container-fluid text-light">
        <div class="row flex-column justify-content-center align-items-center" style="min-height:80vh">
        <p class=" col-12 w-50 text-center m-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere corporis quisquam assumenda laboriosam necessitatibus architecto aspernatur fugiat non doloribus vero.</p>
        <button type="button" class="btn btn-outline-light btn-lg">Large button</button>
        </div>
    </section>

    <footer class="container-fluid bg-dark mt-5">
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
            <div class="col-12 text-light text-center bg-secondary"> Glint - Tous droit reserve</div>
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
        function afficheGallerie() {
            let e = document.querySelector(".contente");
            e.classList.toggle("active");
        }
        let el = document.querySelector(".fleche");
        el.addEventListener("click", afficheGallerie);


    
        let images = document.querySelectorAll(".contente img").forEach( e => {
            e.addEventListener('click', function (ev) {
                let src = this.src;
                document.querySelector(".popup img").setAttribute("src", src);
                document.querySelector(".popup").classList.add("active");
            })
        })
        document.querySelector(".close").addEventListener('click', function() {
            document.querySelector(".popup").classList.remove("active");
        })
        
    </script>

</body>
</html>