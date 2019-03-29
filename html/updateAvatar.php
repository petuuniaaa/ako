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
 <script src="/js/animation.js"></script>
 </body>
 </html>
