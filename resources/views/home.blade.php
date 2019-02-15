@extends('layout')

@section('title', 'Glint - Home')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
@endsection

@section('content')

    <header class="d-flex justify-content-center align-items-center">
        <h1 class="title text-light">Glint</h1>
        <img src="{{ URL::asset('img/glint-title.png') }}" alt="" class="title">
    </header>

    <section class="container text-light px-lg-5" style="position: relative; top: -15vh;">
        <div class="embed-responsive video-iframe embed-responsive-16by9 bg-black">
            <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/EvZuMWqrfg4"
                allowfullscreen></iframe>
        </div>
        <h2 class="title text-center text-uppercase my-5 deco">a propos</h2>
        <div class="row justify-content-center">
            <p class=" col-md-10 px-lg-5"> Dans un monde rongé par le mal, naît une flamme parmi les ombres. Son destin
                : le sauver de la malédiction. <br>
                Bienvenue sur le site de Glint, un jeu indépendant en développement depuis septembre 2018 créé par 6
                étudiants en MMI.
            </p>
        </div>
    </section>

    <section class="container-fluid text-light bg-forest">
        <div class="row flex-column justify-content-center align-items-center" style="min-height:70vh">
            <p class=" col-12 text-center p-3 p-lg-5 slogan">Envie de vous lancer dans l’aventure ? <br> De contribuer
                au développement du jeu ? <br> Téléchargez, jouez, commentez !</p>
            <a href="{{ route('addPost', ['version' => $version_name]) }}"><button class="btn btn-outline-light btn-lg px-4" type="link">Télecharger le jeu</button></a>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        const nav = document.querySelector("nav.navbar");
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
@endsection




