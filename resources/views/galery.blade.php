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
                <p class="mx-lg-5 mx-3 pt-xl-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi esse
                    vitae
                    consequuntur adipisci nostrum quis temporibus, quos atque dignissimos minus libero impedit eos aut
                    excepturi eum iste, dolor fugiat a!</p>
            </div>
            <div class="col-md-6 col-12 order-md-1">
                <img src="https://via.placeholder.com/1600x900" class="img-fluid" alt="">
            </div>
        </section>
        <section class="row my-3">

            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/croquis.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/marche.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/second.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/speeddraw.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/Version2.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6 col-md-4 my-3 my-md-4">
                <img src="{{ URL::asset('img/galery/team.jpg') }}" class="img-fluid" alt="">
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
