<?php
    $lastVersionRef = route('addPost', ['version' => $versions->first()->name]);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="img/Favicon.png" href="Favicon.png"> 
    <link rel="stylesheet" href="css/home.css">
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
            <br>
            Envie de vous lancer dans l’aventure ? <br>
            De contribuer au développement du jeu ? <br>
            Téléchargez, jouez, commentez !</p>
            <a href="{{ $lastVersionRef }}">Télécharger le jeu <span>(Version 1.0)</span></a>
        </div>
    </header>

    <section id="pres">
        <h2>Tralier pré-alpha</h2>
        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fglintgame%2Fvideos%2F242222793139987%2F&show_text=0&width=560"
            width="600" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
            allowTransparency="true" allowFullScreen="true"></iframe>
        <p>Voici la toute première version du jeu.<br>
        Encore en développement, vos avis et vos idées peuvent contribuer à son amélioration !<br>
        Alors qu’attendez-vous ?</p>
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
        <div class="popup">
            <a class="close">&times;</a>
            <img src="img/galery/placeholder.png" alt="placeholder">
        </div>
        <div class="fleche"></div>
    </section>

    <section id="telechargement">
        <p>Vous souhaitez participer au dévlopement de glint ? <br>Tester et nous des retour sur la derrenière version du jeu ?</p>
        <a href="{{ $lastVersionRef }}">Télécharger le jeu <span>(Version 1.0)</a>
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