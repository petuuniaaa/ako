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
    <link rel="stylesheet" href="../css/bienvenue.css">
    <title>Bienvenue sur Ako</title>
</head>

<body id="animation"> 
    <section class="conversation">
        <div class="circular-sb">
            <p>Bienvenue <?php echo $_SESSION["pseudo"];?></p>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <img src="/pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
    </section>
    <p class="text">Découvrir le jeu</p>
    <a href="age.html"><img src="../pictures/svg/flechesuivant.svg" alt="Page suivante" class="suivant"></a>
</body>

</html>