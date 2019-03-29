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
  <meta charset="UTF-8"/>

  <!-- STYLE -->
  <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <link rel="stylesheet" href="../css/jeuGagne.css">
  <link rel="icon" href="../pictures/favicon.ico">
  <title>Memory Game</title>
</head>

<body>
  <header>
    <nav>
      <a href="age.php"><img src="../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
      <?php
                       $db = getDatabase();
                       $req = $db->prepare("SELECT avatar FROM Utilisateur WHERE id = '".$_SESSION['userId']."'");
$req->execute();
       $user = $req->fetchAll(PDO::FETCH_ASSOC);
    //    <?=$user[0]['avatar'];
        ?>
      <a href="compte.php"><img src="<?=$user[0]['avatar'];?>" alt="Compte utilisateur" class="avatarCompte"></a>
    </nav>
    <h1><?= $_SESSION["jeu"];?></h1>
    
  </header>
<!--description-->
  <section class="main">
  <?php
         $animaux='animaux';
         $drapeaux='drapeaux';
         $monuments='monuments';
         $mythologie='mythologie';
  $db = getDatabase();
  if ($_SESSION["animaux"]!=null){
  $req = $db ->query('SELECT * FROM Image_jeu WHERE theme = "'.$animaux.'"');
}
    else if ($_SESSION["monuments"]!=null){
        $req = $db ->query('SELECT * FROM Image_jeu WHERE theme = "'.$monuments.'"');
    }
          else if ($_SESSION["drapeaux"]!=null){
        $req = $db ->query('SELECT * FROM Image_jeu WHERE theme = "'.$drapeaux.'"');
    }
              else if ($_SESSION["mythes"]!=null){
        $req = $db ->query('SELECT * FROM Image_jeu WHERE theme = "'.$mythologie.'"');
    }
      $array = $req->fetchAll(PDO::FETCH_ASSOC);
      shuffle($array);
      $i = rand(1,5);
         ?>
    <p><?=$array[$i]['description'];?></p>
  </section>

  <section class="footer">
    <img src="../pictures/svg/Ako-coloree-intello.svg" alt="Ako" class="ako">
      
<!--image gagnée au hasard parmi le thème choisi -->

<img src="<?=$array[$i]['image_jeu'];?>" alt=" " class="animo">
    <img src="../pictures/svg/boutonson.svg" alt="Mettre le son" class="son">
    <a  href="jeuNewImg.php">
      <img src="../pictures/svg/flechesuivant.svg" alt="Page suivante" class="suivant">
    </a>
  </section>

  <!-- SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="../js/animation.js"></script>
</body>

</html>