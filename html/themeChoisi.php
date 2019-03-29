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
        <img src="../pictures/svg/AKOOOO.svg" alt="pieuvre">
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
    <script src="/js/animation.js"></script>
</body>

</html>