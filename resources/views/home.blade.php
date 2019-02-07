<?php
    $lastVersionRef = route('addPost', ['version' => $versions->first()->name]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:image" content="{{ URL::asset('images/visusitev11.jpg') }}" />
    <link rel="icon" type="image/png" href="{{ URL::asset('img/Favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Rosario" rel="stylesheet">
    
    <title>Glint</title>
</head>

<body>
    <header>
        <div>
            <h1>Glint</h1>
            <p>Dans un monde rongé par le mal, naît une flamme parmi les ombres.   <br>
            Son destin : le sauver de la malédiction.<br>
            <br>
            Bienvenue sur le site de Glint, un jeu indépendant en développement depuis septembre 2018 créé par 6 étudiants en MMI.<br>
            <br>Téléchargez, jouez, commentez !</p>
            <a href="{{ $lastVersionRef }}" class="button">Télécharger le jeu <span>(Version 0.1)</span></a>
        </div>
    </header>

    <section id="pres">
        <h2>Trailer pré-alpha</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/sLFLuvwOTOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Voici la toute première version du jeu.<br>
        Encore en développement, vos avis et vos idées peuvent contribuer à son amélioration !<br>
        Alors qu’attendez-vous ?</p>
    </section>

    <section id="galery">
            <h2>Galerie</h2>
        <div class="contente">
            <img src="img/galery/team.jpg" alt="">
            <img src="img/galery/croquis.jpg" alt="">
            <img src="img/galery/second.jpg" alt="">
            <img src="img/galery/speeddraw.jpg" alt="">
            <img src="img/galery/Version2.jpg" alt="">
            <img src="img/galery/marche.jpg" alt="">
        </div>
        <div class="popup">
            <a class="close">&times;</a>
            <img src="img/galery/placeholder.png" alt="placeholder">
        </div>
        <div class="fleche"></div>
    </section>

    <section id="telechargement">
        <p>Envie de vous lancer dans l’aventure ?
        <br>De contribuer au développement du jeu ?
        <br>Téléchargez, jouez, commentez !</p>
        <a href="{{ $lastVersionRef }}" class="button">Télécharger le jeu <span>(Version 0.1)</span></a>
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
            
            
            <p>Charline  -  Théo W.</p>
            <p>Marc-Antoine  -  Léon</p>
            <p>Emilien  -  Théo L.</p>
        </div>

        
    </footer>
    <div class="copy">GlintGame - Tous droits réservés</div>
    

    <script>
        function afficheGallerie() {
            let e = document.querySelector(".contente");
            e.classList.toggle("active");
        }
        let el = document.querySelector(".fleche");
        el.addEventListener("click", afficheGallerie);


    
        let images = document.querySelectorAll(".contente img").forEach( e => {
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

</body>
</html>