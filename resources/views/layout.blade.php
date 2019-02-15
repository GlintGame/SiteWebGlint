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
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
<nav class=" navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand mx-3 title" href="{{ route('home') }}">
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
                <a class="nav-link px-3 px-md-4 {{ $page_name === 'home' ? 'active' : ''}}" href="{{ route('home') }}">ACCUIEL</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link px-3 px-md-4 {{ $page_name === 'team' ? 'active' : ''}}" href="{{ route('team') }}">L'EQUIPE</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link px-3 px-md-4 {{ $page_name === 'galery' ? 'active' : ''}}" href="{{ route('galery') }}">GALERIE</a>
            </li>
            <li class="nav-item text-center">
                <a href="{{ route('addPost', ['version' => $version_name])  }}"><button class="btn btn-outline-light mx-4 my-2 my-sm-0 px-4" type="link">TELECHARGER</button></a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<footer class="container-fluid mt-5">
    <div class="row py-5">
        <div class="col-sm-6 m-3 m-sm-0 text-light text-center border-right">
            <h2 class="mb-4">Retrouvez nous sur :</h2>
            <a href="https://www.facebook.com/glintgame" target="_blank"><img class="logo" src="{{ URL::asset('img/facebook.svg') }}" alt="facebook"></a>
            <a href="https://twitter.com/glintgame" target="_blank"><img class="logo" src="{{ URL::asset('img/twitter.svg') }}" alt="twitter"></a>
            <a href="https://www.instagram.com/glintgame/" target="_blank"><img class="logo" src="{{ URL::asset('img/instagram.svg') }}" alt="instagram"></a>
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

@yield('scripts')

</html>

