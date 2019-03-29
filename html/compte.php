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
    <title>Compte</title>

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/compte.css">
    <link rel="icon" href="../pictures/favicon.ico">
</head>

<body id="animation">
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
                <a href="controleTemps.html">Réglage du temps</a>
            </button>
            <button class="deconnexion">
                <img src="../pictures/svg/unlocked.svg" alt="">
                <a href="destroy.php">Déconnexion</a></button>
        </div>
    </section>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="/js/animation.js"></script>
</body>

</html>