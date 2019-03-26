<?php
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
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/themeChoisi.css">
    <title>Theme 6-8 ans</title>
</head>

<body>
    <header>
        <nav>
            <a href="age.html"><img src="../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
            <a href="compte.html"><img src="../pictures/svg/avatarbeta.svg" alt="Compte"
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
</body>

</html>