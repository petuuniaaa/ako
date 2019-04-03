<?php
require_once('init.php');
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/controleTemps.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Controle du temps</title>
</head>

<body>
    <header>
        <a href="compte.php"><img src="../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
        <div class="head">
            <img src="../pictures/svg/locked.svg" alt="">
            <p><strong>Réglage du temps</strong> pour <?= $_SESSION["pseudo"];?></p>
        </div>
    </header>
    <section class="main">
        <p>Heure actuelle :</p>
        <p id="heure"></p>
        <p>Choisir une heure de fin :</p>
        <div class="temps">
            <form action="" id="submit">
                <input type="time" id="time" name="usr_time" value="00:30" min="00:05" max="02:45" required>
                <input type="submit" value="OK">
            </form>
        </div>
        <p class="text">Après cette période de temps, tu ne pourras plus jouer avec Ako.</p>
        <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
    </section>
    <a class="retour" href="compte.php"><img src="../pictures/svg/flecheretour.svg"
            alt="Retour à la page précédente"></a>


    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="/js/animation.js"></script>
    <script src="../js/timer.js"></script>
</body>

</html>