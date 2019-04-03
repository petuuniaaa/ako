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

    
          <!-- SEO -->
  <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, animaux, mythologie, drapeaux, monuments, memory, puzzle, devine image, quizz en ligne, trouver c'est gagné, mini-jeu, jeu, image, collections, compte">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">

    <meta property="og:title" content="Ako Game : Choisis un avatar" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/updateAvatar.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/updateAvatar.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Compte - Modification avatar</title>
</head>

<body id="animation">
    <header>
        <a href="compte.php"><img src="../pictures/svg/logo_ako.svg" alt="Accueil"></a>
        <!--Retour sur la page précèdente-->
        <p>Quelle photo de profil veux-tu ?</p>
    </header>
    <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
     <?php
   echo  '<section>';
       
        $db = getDatabase();
        $reponse = $db->query('SELECT image,nom FROM avatar');
        
        while ($donnees = $reponse->fetch())
        {
//            echo '<img src="';
//            echo $donnees['image'];
//            $src = $donnees['nom'];
//            echo '" class="avatar" alt="" onclick="redirectionVerifAvatar(';
//            echo $src;
//            echo ')">';
            
            ?>
    
                <img src="<?= $donnees['image'] ?>" class="avatar" alt="" onclick="redirectionVerifAvatar('<?= $donnees['image'] ?>')">
    
            <?php
        }

        $reponse->closeCursor();   
   echo '</section>
    <a href="compte.php"><img src="../pictures/svg/flecheretour.svg" alt="return" class="return"></a>
</body>
<script>
    function redirectionVerifAvatar(src)';
    echo "{
        window.location.href = 'verifAvatar.php?img='+src;
    }
</script>";
        echo '</html>';
 ?>

 <!-- SCRIPT -->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="/js/animation.js"></script>
 </body>
 </html>
