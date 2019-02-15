@extends('layout')

@section('title', 'Glint - télécharger')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('css/version.css') }}">
@endsection

@section('content')
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