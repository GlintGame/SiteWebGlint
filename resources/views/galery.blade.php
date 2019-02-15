@extends('layout')

@section('title', 'Glint - galerie')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('css/galery.css') }}">
@endsection

@section('content')
    <main class="container-fluid px-xl-5 mt-5">
        <section class="row text-light my-3 mt-4 align-items-center">
            <div class="col-md-6 col-12 my-4 order-md-2">
                <h1 class="text-center mb-5 title deco">Galerie</h1>
                <p class="mx-lg-5 mx-3 pt-xl-4">Voici la galerie, le développement des visuels et de l’environnement passe par une grande phase de recherche c’est pour cela que nous souhaitons partager avec vous. L’équipe Glint est fière de vous présenter les inspirations les premiers sketchs et quelque dessins supplémentaires :D
                </p>
            </div>
            <div class="col-md-6 col-12 order-md-1">
                <img src="{{ URL::asset('img/galery/glint-affiche.jpg') }}" class="img-fluid" alt="">
            </div>
        </section>
        <section class="row my-3">

            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/croquis.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/speeddraw.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/marche.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/nightdesolationcoloroki.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/fullbg.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/otherfoest.jpg') }}" class="img-fluid" alt="">
            </div>
        </section>
    </main>

    <div class="popup">
        <span class="close">X</span>
        <img src="" alt="">
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll(".img-fluid").forEach( e => {
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
@endsection
