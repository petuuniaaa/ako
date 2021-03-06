<?php
require_once('init.php');
session_start();
$_SESSION["animaux"]=$_POST['animaux'];
$_SESSION["monuments"]=$_POST['monuments'];
$_SESSION["drapeaux"]=$_POST['drapeaux'];
$_SESSION["mythes"]=$_POST['mythes'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO -->
    <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, animaux, mythologie, drapeaux, monuments, memory, puzzle, devine image, quizz en ligne, trouver c'est gagné">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">

    <meta property="og:title" content="Ako Game : Thèmes 6-8 ans" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/themeChoisi.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/themeChoisi.css">
    <link rel="icon" href="../pictures/favicon.ico">
    <title>Thème 6-8 ans</title>
</head>

<body id="animation">
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
            <a href="compte.php"><img src="<?=$user[0]['avatar'];?>" alt="Compte utilisateur"
                    class="avatarCompte"></a>
        </nav>
        <?php
echo '<h1>';
echo $_SESSION["animaux"];
echo '</h1>';
echo '<h1>';
echo $_SESSION["drapeaux"];
echo '</h1>';
echo '<h1>';
echo $_SESSION["monuments"];
echo '</h1>';
echo '<h1>';
echo $_SESSION["mythes"];
echo '</h1>';
?>
    </header>

    <section class="conversation">
        <img src="../pictures/svg/AKOOOO.svg" alt="Ako">
        <div class="circular-sb">
            <p>Choisis ton mini jeu</p>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </section>

    <section class="jeux">
        <a href="puzzle/puzzle.php" class="puzzle"><button>Puzzle</button></a>
        <a href="memory/memory.php" class="memory"><button>Memory</button></a>
        <a href="" class="trouver"><button>Trouver, c'est gagner</button></a>
        <a href="devineImage/devineImage.html" class="devine"><button>Devine image</button></a>
        <a href="" class="online"><button>Quizz en ligne</button></a>
    </section>

<!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/animation.js"></script>
</body>

</html>