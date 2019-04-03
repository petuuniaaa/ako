<!DOCTYPE html>
<?php if (isset($_GET['errors'])): ?>
<div class="alert alert-danger" role="alert">
  Errors:
  <ul>
    <?php foreach($_GET['errors'] as $error): ?>
    <li><?= $error ?></li>  
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO -->
    <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, connexion">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant ! Connecte toi !">

    <meta property="og:title" content="Ako Game : Connection / Inscription à Ako" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/newUser2.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant ! Connecte toi !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/newUser.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Connection / Inscription à Ako</title>
</head>

<body id="animation">
    <section class="conversation">
        <img src="../pictures/svg/AKOOOO.svg" alt="" class="ako">
        <div class="circular-sb">
            <p>Ecris ton pseudo !</p>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </section>
    <div id="boutons">
        <button id="boutonConnexion">Connexion</button>
    </div>

    <form action="userConnect.php" method="POST" style="display: none" id="connexion">
        <h1>Connexion</h1>
        <input type="text" name="pseudo" placeholder="Ton pseudo">
        <input type="password" name="password" required placeholder="Mot de passe" maxlength="16">
        <input type="submit" value="OK">
    </form>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="/js/animation.js"></script>
    <script src="/js/newUser2.js"></script>
</body>

</html>

