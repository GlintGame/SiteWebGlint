<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <title>Galerie</title>
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">GLINT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-center">
                    <a class="nav-link px-3 px-md-4" href="{{ route('home') }}">ACCUIEL</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link px-3 px-md-4" href="{{ route('team') }}">L'EQUIPE</a>
                </li>
                <li class="nav-item text-center active">
                    <a class="nav-link px-3 px-md-4" href="{{ route('galery') }}">GALERIE</a>
                </li>
                <li class="nav-item text-center">
                    <a href="{{ $lastVersionRef }}"><button class="btn btn-outline-light mx-4 my-2 my-sm-0 px-4" type="link">TELECHARGER</button></a>
                </li>

        </div>
    </nav>
    <main class="container-fluid px-xl-5">
        <section class="row text-light my-3 mt-4 align-items-center">
            <div class="col-md-6 col-12 my-4 order-md-2">
                <h1 class="text-center mb-5">Galerie</h1>
                <p class="mx-lg-5 mx-3 pt-xl-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi esse vitae
                    consequuntur adipisci nostrum quis temporibus, quos atque dignissimos minus libero impedit eos aut
                    excepturi eum iste, dolor fugiat a!</p>
            </div>
            <div class="col-md-6 col-12 order-md-1">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
        </section>
        <section class="row my-3">
        
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
            
                
            
        </section>





    </main>
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
