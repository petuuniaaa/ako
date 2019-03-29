<?php
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
    <link rel="stylesheet" href="../css/verifAvatar.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Compte - Modification avatar</title>
</head>

<body id="animation">
    <header>
        <a href="compte.php"><img src="../pictures/svg/logo_ako.svg" alt="Accueil"></a>
    </header>

    <section>
    <img src="
                  <?php
                  echo $_GET['img'];
                  $_SESSION["img"]=$_GET['img'];
                  ?>
                  " class="avatar " alt="Avatar" >
        <div class="dialogue">
            <p>Tu veux choisir cette image ?</p>
            <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
        </div>
    </section>
    <section class="footer">
        <a href="update.php">
            <img src="../pictures/svg/succes.svg" alt="Oui" class="checked">
        </a>
        <a href="updateAvatar.php">
            <img src="../pictures/svg/flecheretour.svg" alt="Non, retour" class="return">
        </a>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="/js/animation.js"></script>
</body>

</html>