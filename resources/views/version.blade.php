<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/Favicon.png"> 
    <link rel="stylesheet" href="css/version.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Rosario" rel="stylesheet">
    <title>Glint : Téléchargement</title>
</head>

<body>
    <header>
        <a href="{{ route('home') }}" class="retour">◄ Accueil</a>

        <h1>Télécharger Glint <span>(V0.1)</span></h1>
        <div>
            <a href="game_version/{{ $version->url }}/glint_win.zip" class="button" download>
                <img src="img/logos/windows.svg" alt="">
                <p>Télécharger la version <br> Windows</p>
            </a>
            <a href="game_version/{{ $version->url }}/glint_mac.zip" class="button" download>
                <img src="img/logos/mac.svg" alt="">
                <p>Télécharger la version <br> Mac</p>
            </a>
            <a href="game_version/{{ $version->url }}/glint_lin.zip" class="button" download>
                <img src="img/logos/linux.svg" alt="">
                <p>Télécharger la version <br> Linux</p>
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

    <footer>
        <div class="reseaux">
            <h2>Retrouvez nous sur :</h2>
            <a href="https://www.facebook.com/glintgame"><img src="img/facebook.svg" alt="facebook"></a>
            <a href="https://twitter.com/glintgame"><img src="img/twitter.svg" alt="twitter"></a>
            <a href="https://www.instagram.com/glintgame/"><img src="img/instagram.svg" alt="instagram"></a>
        </div>
        <div class="groupe">
            <h2>L'équipe de glint :</h2>
            
            
            <p>Charline  -  Théo W. </p>
            <p>Marc-Antoine  -  Léon</p>
            <p>Emilien  -  Théo L.</p>
        </div>

    </footer>
    <div class="copy">GlintGame - <a href="www.creativecommons.fr">www.creativecommons.fr</a></div>
</body>

</html>
