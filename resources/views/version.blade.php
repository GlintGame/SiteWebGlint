<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="{{ URL::asset('images/visusitev11.jpg') }}" />
    <link rel="icon" type="image/png" href="{{ URL::asset('img/Favicon.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/version.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Rosario" rel="stylesheet">
    <title>Glint : Téléchargement</title>
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
                        <li class="nav-item text-center">
                            <a class="nav-link px-3 px-md-4" href="{{ route('home') }}">ACCUIEL</a>
                        </li>
                        <li class="nav-item text-center">
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
    <header class="row text-light">
        <div class="col-12 col-md-5"></div>
        <div class="col-12 col-md-7 my-5 d-flex flex-column justify-content-around align-items-center">
            <h1 class="text-center my-5">
                <span class="title" >Télécharger Glint</span> <br>
                <span class="subtitle">Version Beta 0.1</span>
            </h1>
            
            <a href="game_version/{{ $version->url }}/glint_win.zip" class="download" download>
                <img src="{{ URL::asset('img/logos/windows.svg') }}" alt="">
                Télécharger la version Windows
            </a>
            <a href="game_version/{{ $version->url }}/glint_mac.zip" class="download" download>
                <img src="{{ URL::asset('img/logos/mac.svg') }}" alt="">
                Télécharger la version Mac
            </a>
            <a href="game_version/{{ $version->url }}/glint_lin.zip" class="download" download>
                <img src="{{ URL::asset('img/logos/linux.svg') }}" alt="">
                Télécharger la version Linux
            </a>
        </div>
    </header>

    <section id="changelog">
        <details open>
            <summary>Derniers changements</summary>
            <p>{!! nl2br(e($version->change_log)) !!}</p>
        </details>
    </section>


    <section id="com">

        <div class="content">
            <h2>Vos avis nous intéressent !</h2>
            <p>Vous avez aimé notre jeu ? Vous avez trouvé un bug ? Des idées d’améliorations ?
            <br>Dites-le-nous en commentaire !</p>

            <form action="{{ route('addPost', ['version' => $version->name]) . '#form-comment' }}" method="POST" id="form-comment">

                @csrf

                @if ($errors->any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <label for="post_name">Nom</label>
                <input type="text" name="given_name" placeholder="Pseudonyme" id="post_name">

                <label for="post_content">Commentaire</label>
                <textarea placeholder=""  name="content" id="post_content" ></textarea>

                <input type="submit" value="Laisser un commentaire">

            </form>

            @foreach ($posts as $post)
                <div class="com">
                    <h3>
                        {{ $post->given_name }}
                        <em>{{ ($post->user == null) ? '(une loupiote anonyme)' : $post->user }}</em>
                    </h3>
                    <p>
                        {!! nl2br(e($post->content)) !!}
                    </p>
                </div>
            @endforeach

        </div>


    </section>

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
