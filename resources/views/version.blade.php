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
        <a href="{{ route('home') }}" class="retour">Retour à l'accueil</a>
        <h1>Télécharger Glint (v0.1)</h1>
        <div>
            
            <a href="{{ $version->url }}" class="button">
                <img src="img/logos/windows.svg" alt="">
                <p>Télécharger la version <br> Windows</p>
            </a>
            <a href="{{ $version->url }}" class="button">
                <img src="img/logos/mac.svg" alt="">
                <p>Télécharger la version <br> Mac</p>
            </a>
            <a href="{{ $version->url }}" class="button">
                <img src="img/logos/linux.svg" alt="">
                <p>Télécharger la version <br> Linux</p>
            </a>
        </div>
    </header>

    <section id="changelog">
        <details>
            <summary>Derniers changements</summary>
            <p>{{ $version->change_log }}</p>
        </details>
    </section>


    <section id="com">

        <div>
            <h2>On a besoin de vos avis !!!</h2>
            <p></p>

            <form action="{{ route('addPost', ['version' => $version->name]) . '#form-comment' }}" method="POST" id="form-comment">

                @csrf
                <h2>Laisser un avis sur le jeu</h2>

                @if (session('posted') == 'no')
                <div style="color: red">
                    Vous avez déja posté il y a moins de 5min, réessayez plus tard
                </div>
                @endif

                <label for="post_name"></label>
                <input type="text" name="given_name" placeholder="Psodonyme" id="post_name">

                <label for="post_content">Votre commentaire</label>
                <textarea placeholder="Vous avez aimé notre jeu ? 
Vous avez trouvé un bug ?
Vous voulez recommander quelque chose ? 
Ecrivez ici !"  name="content" id="post_content" ></textarea>

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
            <a href="https://www.facebook.com/glintgame"><img src="img/Facebook_blanc.svg" alt="facebook"></a>
            <a href="https://twitter.com/glintgame"><img src="img/Twitter_blanc.svg" alt="twitter"></a>
            <a href="https://www.instagram.com/glintgame/"><img src="img/Instagram_blanc.svg" alt="instagram"></a>
        </div>
        <div class="groupe">
            <h2>Glint créé par :</h2>
            <p>Marc-Antoine 🎵 -  Théo 🎥</p>
            <p>Charline 🖌️ -  Léon #️⃣</p>
            <p>Emilien 🔗 -  Théo #️⃣</p>
        </div>
    </footer>
</body>

</html>
