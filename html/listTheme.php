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
    <link rel="stylesheet" href="../css/listTheme.css">
    <title>Thèmes 6-8 ans</title>

</head>

<body>
    <header>
        <a href="age.html"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
        <a href="compte.html"><img src="../../pictures/svg/avatarbeta.svg" alt="Compte" class="avatarCompte"></a>
    </header>
    <section class="conversation">
        <img src="../pictures/svg/AKOOOO.svg" alt="pieuvre">
        <div class="circular-sb">
            <p>Choisis un thème !</p>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </section>
    <section class="main">
        <form action='themeChoisi.php' method='POST'>
            <input type='submit' name='monuments' value='monuments' class="monuments" />
            <input type='submit' name='animaux' value='animaux' class="animaux" />
            <input type='submit' name='mythologie' value='mythologie' class="mythes" />
            <input type='submit' name='drapeaux' value='drapeaux' class="drapeaux" />
        </form>
        <!-- <a href="themeChoisi.html" class="monuments"><button>Monuments</button></a>
        <a href="themeChoisi.html" class="animaux"><button>Animaux</button></a>
        <a href="themeChoisi.html" class="mythes"><button>Mythes et Héros</button></a>
        <a href="themeChoisi.html" class="drapeaux"><button>Drapeaux</button></a> -->
    </section>

</body>

</html>