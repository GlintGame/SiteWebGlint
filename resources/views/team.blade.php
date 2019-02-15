@extends('layout')

@section('title', 'Glint - l\'équipe')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('css/team.css') }}">
@endsection

@section('content')
    <main class="container-fluid d-flex justify-content-center align-items-center flex-column mt-3">
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
@endsection

@section('scripts')
@endsection


