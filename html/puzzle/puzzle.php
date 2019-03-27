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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="puzzle.css">

    <title>Puzzle</title>
</head>

<body onload="RandomPlace()">
<?php
echo '<p>';
echo $_SESSION["animaux"];
echo '</p>';
echo '<p>';
echo $_SESSION["drapeaux"];
echo '</p>';
echo '<p>';
echo $_SESSION["monuments"];
echo '</p>';
echo '<p>';
echo $_SESSION["mythes"];
echo '</p>';
var_dump($_SESSION["animaux"]);
?>
    <header>
        <nav>
            <a href="../age.html"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
            <a href="../compte.html"><img src="../../pictures/svg/avatarbeta.svg" alt="Compte"
                    class="avatarCompte"></a>
        </nav>
        <h1> Puzzle </h1>
    </header>

    <table class="plateau">
        <tr>
            <th id="1"></th>
            <th id="2"></th>
            <th id="3"></th>
        </tr>
        <tr>
            <th id="4"></th>
            <th id="5"></th>
            <th id="6"></th>
        </tr>
        <tr>
            <th id="7"></th>
            <th id="8"></th>
            <th id="9"></th>
        </tr>
    </table>

    

    <!-- <div class="boxImages">
        <img id="img9" data-case="9" src="pieceCoccinelle/coccinellepuzzle9.svg" alt="" class="imgRandom">
        <img id="img6" data-case="6" src="pieceCoccinelle/coccinellepuzzle6.svg" alt="" class="imgRandom">
        <img id="img3" data-case="3" src="pieceCoccinelle/coccinellepuzzle3.svg" alt="" class="imgRandom">
        <img id="img5" data-case="5" src="pieceCoccinelle/coccinellepuzzle5.svg" alt="" class="imgRandom">
        <img id="img8" data-case="8" src="pieceCoccinelle/coccinellepuzzle8.svg" alt="" class="imgRandom">
        <img id="img4" data-case="4" src="pieceCoccinelle/coccinellepuzzle4.svg" alt="" class="imgRandom">
        <img id="img7" data-case="7" src="pieceCoccinelle/coccinellepuzzle7.svg" alt="" class="imgRandom">
        <img id="img1" data-case="1" src="pieceCoccinelle/coccinellepuzzle1.svg" alt="" class="imgRandom">
        <img id="img2" data-case="2" src="pieceCoccinelle/coccinellepuzzle2.svg" alt="" class="imgRandom">
    </div> -->

    <?php
    require_once('../init.php');
    ?>
    <?php
    echo '<p>';
    echo $_POST['animaux'];
    echo '</p>';
    
    echo '<p>';
    echo $_POST['monuments'];
    echo '</p>';
    $animaux=rand(1,5);
    $monuments=rand(6,9);
    
    $db = getDatabase();
    if ($_SESSION["animaux"]!=null){
$req = $db->query('SELECT piece_puzzle FROM puzzle WHERE nom_puzzle='.$animaux.'');
}
    else {
        $req = $db->query('SELECT piece_puzzle FROM puzzle WHERE nom_puzzle='.$monuments.'');
    }
echo "<h2>coucou</h2>";
 $i = 1;

// echo "<div class=\"imgBox\">";

while ($data = $req->fetch())
{
    echo '<img class="imgRandom" alt="" id="img';
    echo $i;
    echo '" data-case="';
    echo $i;
    echo '" src="';
	echo $data['piece_puzzle'];
    echo '"> <br>';
   $i++;
}

// echo "</div>";
    ?>
 <a href="../outils/destroy.php"><button>retour</button></a>

    <!-- MODAL DEBUT -->
    <div class="modal" tabindex="-1" role="dialog" id="modalDebut">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <section class="debutJeu">
                        <img src="../../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
                        <div class="circular-sb">
                            <p>Fais glisser les pièces de puzzle pour compléter l'image</p>
                            <div class="circle3"></div>
                            <div class="circle4"></div>
                            <img src="../../pictures/svg/boutonson.svg" alt="Couper / remettre le son" class="son">
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-debut" data-dismiss="modal"
                        id="close">Jouer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CONTINUE COMME CA -->
    <div class="modal" tabindex="-1" role="dialog" id="modalContinue">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <section class="continueJeu">
                        <img src="../../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
                        <div class="circular-sb">
                            <p>Bravo, continues comme ça !</p>
                            <div class="circle3"></div>
                            <div class="circle4"></div>
                            <img src="../../pictures/svg/boutonson.svg" alt="Couper / remettre le son" class="son">
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close"><img
                            src="../pictures/svg/flecheretour2blanc.svg" alt=""></button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL VICTOIRE AKO APPARAIT -->

    <div class="modal" tabindex="-1" role="dialog" id="completed">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <section class="victoire">
                        <div class="circular-sb">
                            <p>C'est gagné, félicitations !</p>
                            <img src="../../pictures/svg/boutonson.svg" alt="Ako" class="son">
                            <div class="circle3"></div>
                            <div class="circle4"></div>
                        </div>
                        <img src="../../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close"><img
                            src="../../pictures/svg/flecheretour2blanc.svg" alt="Retour à la page principale">
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="puzzle.js"></script>
</body>

</html>