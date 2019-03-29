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
    <link rel="stylesheet" href="../css/bienvenue.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Bienvenue sur Ako</title>
</head>

<body> 
    <section class="conversation">
        <div class="circular-sb">
            <p>Bienvenue <?php echo $_SESSION["pseudo"];?></p>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <img src="/pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
    </section>
    <p class="text">Découvrir le jeu</p>
    <a href="age.php"><img src="../pictures/svg/flechesuivant.svg" alt="Page suivante" class="suivant"></a>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../js/animation.js"></script>
</body>

</html>