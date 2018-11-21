<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/version.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <title>Glint : Téléchargement</title>
</head>

<body>
    <header>
        <a href="{{ route('home') }}" class="retour">Retour à l'accueil</a>
        <h1>Télécharger Glint (V.01)</h1>
        <p>Vous vous appréter à télécharger la toute première version de Glint. De nombreux bugs peuvent être présent
            et c’est à vous de machin chose... Dispo partout mais... Pas dispo sur téléphone et tout....</p>
        <div>
            <a href="{{ $version->url }}" class="win">Télécharger la version Windows (200mo)</a>
            <a href="{{ $version->url }}" class="mac">Télécharger la version Mac (200mo)</a>
            <a href="{{ $version->url }}" class="linux">Télécharger la version Linux (200mo)</a>
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
            <p>
                Mox dicta finierat, multitudo omnis ad, quae imperator voluit, promptior laudato consilio consensit in
                pacem ea ratione maxime percita, quod norat expeditionibus crebris fortunam eius in malis tantum
                civilibus vigilasse, cum autem bella moverentur externa, accidisse plerumque luctuosa, icto post haec
                foedere gentium ritu perfectaque sollemnitate imperator Mediolanum ad hiberna discessit.
            </p>

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

            @foreach ($version->posts as $post)

            <div class="com">
                <h3>
                    {{ $post->given_name }}
                    <em>{{ ($post->user == null) ? '(une loupiote anonyme)' : $post->user }}</em>
                </h3>
                <p>
                    {{ $post->content }}
                </p>
            </div>

            @endforeach

        </div>


    </section>

    <footer>
        <p>lien vers les réseaux</p>

    </footer>
</body>

</html>
