<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <button onclick="redirectionReplay()">Rejouer</button>
        <a href="listTheme.php"><img src="../pictures/svg/flecheretour.svg" alt="Retour vers la liste de thèmes"></a>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="/js/animation.js"></script>
    <script>
        function redirectionReplay() {
            window.location.href = '<?=
        $_SESSION["jeu"];
        ?>/<?=
        $_SESSION["jeu"];
        ?>.php';
        }

        function son() {
            var success = new Audio('/sons/son-appli/image+Collection.wav');
            success.play();
        }
    </script>
</body>

</html>