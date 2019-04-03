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
    <title>Compte utilisateur</title>

          <!-- SEO -->
  <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, animaux, mythologie, drapeaux, monuments, memory, puzzle, devine image, quizz en ligne, trouver c'est gagné, mini-jeu, jeu, image, collections, compte">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">

    <meta property="og:title" content="Ako Game : Compte utilisateur" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/compte.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/compte.css">
    <link rel="icon" href="../pictures/favicon.ico">
</head>

<body>
    <header>
        <a href="listTheme.php"><img src="../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
    </header>
    <section>
        <div class="head">
        <?php
           echo ' <a href="updateAvatar.php"><img src="';
                        
        
                $db = getDatabase();
                       $req = $db->prepare("SELECT avatar FROM Utilisateur WHERE id = '".$_SESSION['userId']."'");
$req->execute();
       $user = $req->fetchAll(PDO::FETCH_ASSOC);

               if($user[0]['avatar']!=NULL){
                   echo $user[0]['avatar'];
               }
                else{
                        echo '../pictures/svg/avatarbeta.svg';
                }
                   
               echo ' "alt="Avatar, cliquez pour modifier" class="avatarCompte">';
                 
              echo '<img src="../pictures/svg/crayonviolet.svg" alt="Modifier l\'avatar" class="modifierCrayon"></a>
              ';
                    ?> 
          
            <p><?=$_SESSION["pseudo"];?></p>
        </div>
        <div class="bloc">
            <button class="collection"><a href="collections.php">
                    Collections</a></button>
            <button class="timer">
                <img src="../pictures/svg/locked.svg" alt="Verrouillé par un mot de passe">
                <a href="controleTemps.php">Réglage du temps</a>
            </button>
            <button class="deconnexion">
                <img src="../pictures/svg/unlocked.svg" alt="">
                <a href="deconnexion.html">Déconnexion</a></button>
        </div>
    </section>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/js/animation.js"></script>
</body>

</html>