<?php
session_start();
require_once('init.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <!-- SEO -->
  <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, animaux, mythologie, drapeaux, monuments, memory, puzzle, devine image, quizz en ligne, trouver c'est gagné, mini-jeu, jeu, image, collections">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">

    <meta property="og:title" content="Ako Game : Collections" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/collections.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/collections.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Thèmes 6-8 ans</title>

</head>

<body>
    <header>
        <nav>
            <a href="age.php"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
            <?php
                       $db = getDatabase();
                       $req = $db->prepare("SELECT avatar FROM Utilisateur WHERE id = '".$_SESSION['userId']."'");
$req->execute();
       $user = $req->fetchAll(PDO::FETCH_ASSOC);
    //    <?=$user[0]['avatar'];?>
            <a href="compte.php"><img src="<?=$user[0]['avatar'];?>" alt="Compte utilisateur"
                    class="avatarCompte"></a>
        </nav>
        <h1>Tes collections</h1>
    </header>
    <section class="main">
        <form action='collectionTheme.php' method='POST'>
            <input type='submit' name='monuments' value='monuments' class="monuments" />
            <input type='submit' name='animaux' value='animaux' class="animaux" />
            <input type='submit' name='mythologie' value='mythologie' class="mythes" />
            <input type='submit' name='drapeaux' value='drapeaux' class="drapeaux" />
        </form>
    </section>
    <section class="conversation">
        <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
        <div class="circular-sb">
            <p>Wahou !</p>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </section>
    <a class="retour" href="compte.php"><img src="../pictures/svg/flecheretour.svg"
            alt="Retour à la page précédente"></a>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/js/animation.js"></script>
</body>

</html>