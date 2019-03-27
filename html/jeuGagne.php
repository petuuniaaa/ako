<?php
require_once('init.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8"/>

  <!-- STYLE -->
  <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <link rel="stylesheet" href="../css/jeuGagne.css">
  <title>Memory Game</title>
</head>

<body>
  <header>
    <nav>
      <a href="age.html"><img src="../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
      <a href="compte.html"><img src="../pictures/svg/avatarbeta.svg" alt="Compte utilisateur" class="avatarCompte"></a>
    </nav>
    <h1>Memory</h1>
  </header>
<!--description-->
  <section class="main">
    <?php
  $db = getDatabase();
      $req = $db ->query('SELECT * FROM Image_jeu WHERE theme = "animaux"');
      $array = $req->fetchAll(PDO::FETCH_ASSOC);
      shuffle($array);
      $i = rand(1,9);
    echo '<p>';
        echo $array[$i]['description'];
    echo '</p>';
    ?>
  </section>

  <section class="footer">
    <img src="../pictures/svg/Ako-coloree-intello.svg" alt="Ako" class="ako">
      
<!--image gagnée au hasard parmi le thème choisi -->

    <?php
    echo '<img src="';
    echo $array[$i]['image_jeu'];
    echo '" alt=" " class="animo">';
    ?>
    <img src="../pictures/svg/boutonson.svg" alt="Mettre le son" class="son">
    <a  href="jeuNewImg.html">
      <img src="../pictures/svg/flechesuivant.svg" alt="Page suivante" class="suivant">
    </a>
  </section>
</body>

</html>