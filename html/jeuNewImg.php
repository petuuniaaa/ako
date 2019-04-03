<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO -->
  <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, animaux, mythologie, drapeaux, monuments, memory, puzzle, devine image, quizz en ligne, trouver c'est gagné, mini-jeu, jeu, image">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">

    <meta property="og:title" content="Ako Game : nouvelle image" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/jeuNewImg.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/jeuNewImg.css">
    <link rel="icon" href="../pictures/favicon.ico">

    <title>Nouvelle image !</title>
</head>

<body>
    <header>
        <nav>
            <a href="age.php"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
            <a href="compte.php"><img src="../../pictures/svg/avatarbeta.svg" alt="Compte" class="avatarCompte"></a>
        </nav>
        <h1><?=
        $_SESSION["jeu"];
        ?></h1>
    </header>
    <section class="conversation">
        <div class="circular-sb">
            <p>Tu as une image de plus dans ta collection !</p>
            <img src="../pictures/svg/boutonson.svg" alt="Couper/remettre le son" class="son" onclick="son()">
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
        <div class="boutons">
            <button onclick="redirectionReplay()">Rejouer</button>
            <button onclick="redirectionCollection()">Collection</button>
        </div>
        <a href="listTheme.php"><img src="../pictures/svg/flecheretour.svg" alt="Retour vers la liste de thèmes"></a>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/js/animation.js"></script>
    <script>
        function redirectionReplay() {
            window.location.href = '<?=
        $_SESSION["jeu"];
        ?>/<?=
        $_SESSION["jeu"];
        ?>.php';
        }

        function redirectionCollection(params) {
            window.location.href = 'collections.php';
        }

        function son() {
            var success = new Audio('/sons/son-appli/image+Collection.wav');
            success.play();
        }
    </script>
</body>

</html>