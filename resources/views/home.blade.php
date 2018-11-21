<?php
    $lastVersionRef = route('addPost', ['version' => $versions->first()->name]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <title>Glint</title>
</head>

<body>
    <header>
        <div>
            <h1>Glint</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aliquam quidem laboriosam non vero
                omnis quas!</p>
            <a href="{{ $lastVersionRef }}">Page de la première version du jeu</a>
        </div>
    </header>

    <section id="pres">
        <h2>Tralier pré-alpha</h2>
        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fglintgame%2Fvideos%2F242222793139987%2F&show_text=0&width=560"
            width="600" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowTransparency="true" allowFullScreen="true"></iframe>
        <p>Commme vous pouvez le voir, le jeu est encore en dévlopement.<br>Et c’est justement grace à vous que nous
            pourions créer le meilleur jeu possible etc...</p>
    </section>

    <section id="galery">
            <h2>Galerie</h2>
        <div class="contente">
            <img src="img/galery/placeholder.png" alt="placeholder">
            <img src="img/galery/placeholder.png" alt="placeholder">
            <img src="img/galery/placeholder.png" alt="placeholder">
            <img src="img/galery/placeholder.png" alt="placeholder">
            <img src="img/galery/placeholder.png" alt="placeholder">
            <img src="img/galery/placeholder.png" alt="placeholder">
        </div>
        <div class="fleche"></div>
    </section>

    <section id="telechargement">
        <p>Vous souhaitez participer au dévlopement de glint ? <br>Tester et nous faire des commentaires sur la derrenière version du jeu ?</p>
        <a href="{{ $lastVersionRef }}">Alors rendez-vous ici pour accéder à la page de téléchargement de glint</a>
    </section>

    <footer>
        <p>lien vers les réseaux</p>
    </footer>

    <script>
        function afficheGallerie() {
        let e = document.querySelector(".contente");
        e.classList.toggle("active");
        }
        let el = document.querySelector(".fleche");
        el.addEventListener("click", afficheGallerie);
    
    </script>

</body>
</html>