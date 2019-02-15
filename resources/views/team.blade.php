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
    <link rel="stylesheet" href="{{ URL::asset('css/team.css') }}">
    <title>L'équipe</title>
</head>

<body>
    <nav class=" navbar navbar-expand-md navbar-dark bg-black sticky-top">
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
                <li class="nav-item text-center">
                    <a class="nav-link px-3 px-md-4" href="{{ route('home') }}">ACCUIEL</a>
                </li>
                <li class="nav-item text-center active">
                    <a class="nav-link px-3 px-md-4" href="{{ route('team') }}">L'EQUIPE</a>
                </li>
                <li class="nav-item text-center ">
                    <a class="nav-link px-3 px-md-4" href="{{ route('galery') }}">GALERIE</a>
                </li>
                <li class="nav-item text-center active">
                    <a href=""><button class="btn btn-outline-light mx-4 my-2 my-sm-0 px-4" type="link">TELECHARGER</button></a>
                </li>

        </div>
    </nav>
    <main class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-center text-light m-4 title deco">L'équipe</h1>
        <!-- <picture class="d-flex justify-content-center align-items-center">
            <source media="(max-width: 720px)" srcset="https://via.placeholder.com/1600x900">

            <img src="https://via.placeholder.com/2400x900" class="img-fluid mb-4" style="width:100%; max-width:90rem"
                alt="">
        </picture> -->

        <div class="card-deck justify-content-center align-items-center" style="max-width:78.9rem">

            <a href="https://www.youtube.com/watch?v=h3fNHtuk7Rw" class="card bg-light m-md-5 m-3" style="max-width: 20rem; min-width:18rem;">
                <img src="{{URL::asset('img/TheoW.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-0">Théo Wavrin</h5>
                    <p class="card-text"><small class="text-muted">Product-owner / Community manager </small></p>
                    <p class="card-text mb-3"></p>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=6_fyiOn4ApA" target="_blank" target="_blank" class="card bg-light m-md-5 m-3" style="max-width: 20rem; min-width:18rem;">
                <img src="{{URL::asset('img/Emilien.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-0">Emilien Vandevelde</h5>
                    <p class="card-text"><small class="text-muted">Scrum-master / Dévelopeur front-end</small></p>
                    <p class="card-text mb-3"></p>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=pVi7mWLHKrE" target="_blank" class="card bg-light m-md-5 m-3" style="max-width: 20rem; min-width:18rem;">
                <img src="{{URL::asset('img/Charline.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-0">Charline Mestraletti</h5>
                    <p class="card-text"><small class="text-muted">Graphiste</small></p>
                    <p class="card-text mb-3"></p>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=aS1Ww_DkOKM" target="_blank" class="card bg-light m-md-5 m-3" style="max-width: 20rem; min-width:18rem;">
                <img src="{{URL::asset('img/TheoL.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-0">Théo Lemoine</h5>
                    <p class="card-text"><small class="text-muted">Développeur Unity / Développeur Back-end</small></p>
                    <p class="card-text mb-3"></p>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=OGXzzj-IyP8" target="_blank" class="card bg-light m-md-5 m-3" style="max-width: 20rem; min-width:18rem;">
                <img src="{{URL::asset('img/Marc.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-0">Marc-Antoire Feriaux</h5>
                    <p class="card-text"><small class="text-muted">Graphiste / Sound-designer</small></p>
                    <p class="card-text mb-3"></p>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=YdBr4vPvHz0" target="_blank" class="card bg-light m-md-5 m-3" style="max-width: 20rem; min-width:18rem;">
                <img src="{{URL::asset('img/Leon.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-0">Léon Baudouin</h5>
                    <p class="card-text"><small class="text-muted">Développeur Unity</small></p>
                    <p class="card-text mb-3"></p>
                </div>
            </a>


        </div>





    </main>
    <footer class="container-fluid mt-5">
        <div class="row py-5">
            <div class="col-sm-6 m-3 m-sm-0 text-light text-center border-right">
                <h2 class="mb-4">Retrouvez nous sur :</h2>
                <a href="https://www.facebook.com/glintgame" target="_blank"><img class="logo" src="img/facebook.svg" alt="facebook"></a>
                <a href="https://twitter.com/glintgame" target="_blank"><img class="logo" src="img/twitter.svg" alt="twitter"></a>
                <a href="https://www.instagram.com/glintgame/" target="_blank"><img class="logo" src="img/instagram.svg" alt="instagram"></a>
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
