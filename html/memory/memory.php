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
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <title>Memory Game</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <link rel="stylesheet" href="memory.css">
</head>

<body>
  <header>
    <nav>
      <a href="../age.html"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
      <a href="../compte.html"><img src="../../pictures/svg/avatarbeta.svg"  alt="Compte"
          class="avatarCompte"></a>
    </nav>
    <h1>Memory</h1>
  </header>

  <?php
    require_once('../outils/init.php');
  ?>

  <section class="memory-game">
    <div class="plateau">
            
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
            for($i=0;$i<6;$i++){
                echo '<div class="memory-card" data-framework="';
                echo $array[$i]['nom_image'];
                    echo '">
                    <div class="front-face">
<img src="';
                echo $array[$i]['image_jeu'];
                 echo '" alt="';
                 echo $array[$i]['nom_image'];
                     echo '">
          <h1>';
                 echo $array[$i]['nom_image'];
                 echo '</h1>
        </div>
        <img class="back-face" src="';
    echo 'https://image.tamaiticorp.fr/Graphisme/AKO%20images%20pieuvre/shapeAKObleu.svg';
    echo '" alt="Memory Card">
      </div>';
    echo '<div class="memory-card" data-framework="';
                echo $array[$i]['nom_image'];
                echo '">
        <div class="front-face">
<img src="';
                 echo $array[$i]['image_jeu'];
                 echo '" alt="';
                echo $array[$i]['nom_image'];
                     echo '">
          <h1>';
                echo $array[$i]['nom_image'];
                echo '</h1>
        </div>
        <img class="back-face" src="';
    echo 'https://image.tamaiticorp.fr/Graphisme/AKO%20images%20pieuvre/shapeAKObleu.svg';
    echo '" alt="Memory Card">
      </div>';
            }
        ?>
</section>
<section class="footer">
    <button class="son" type="image" id="son"></button>
    <div class="notactived">
      <img src="../../pictures/svg/erreur.svg" alt="" id="condition">
      <p id="textCondition"></p>
    </div>
    <a href="../listTheme.php"><img src="../../pictures/svg/flecheretour.svg" alt="return" class="return"></a>
  </section>

  <!-- MODAL DEBUT JEU -->

  <div class="modal" tabindex="-1" role="dialog" id="modalDebut">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <section class="debutJeu">
            <img src="../../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
            <div class="circular-sb">
              <p>Collecte les paires d'images correspondantes</p>
              <div class="circle3"></div>
              <div class="circle4"></div>
              <img src="../../pictures/svg/boutonson.svg" alt="Couper / remettre le son" class="son">
            </div>
          </section>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Jouer</button>
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
              <p>Hey! Tu es trop fort, tu as complété le memory</p>
              <img src="/pictures/svg/boutonson.svg" alt="" class="son">
              <div class="circle3"></div>
              <div class="circle4"></div>
            </div>
            <img src="../../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
          </section>
        </div>
        <div class="modal-header">
          <div class="col-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal-close">
              <svg data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.76 29.76">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #fff;
                    }

                    .cls-2 {
                      fill: #765593;
                    }
                  </style>
                </defs>
                <rect class="cls-1" x="4.68" y="6.22" width="20.48" height="16.42" />
                <path class="cls-2" d="M2.2,7.39A14.88,14.88,0,1,0,22.57,2.11,14.88,14.88,0,0,0,2.2,7.39Zm3.87,9.44c.3-2.69.84-5,10.49-4.51a.57.57,0,0,0,.6-.57c0-1.17-.07-3.71-.09-4.61A.14.14,0,0,1,17.3,7l6.88,6.64a.78.78,0,0,1,0,1.1l-6.64,6.89a.13.13,0,0,1-.23-.09l-.08-4.85a.55.55,0,0,0-.48-.55C7.47,15.77,6.07,16.83,6.07,16.83Z"
                  transform="translate(-0.15 -0.05)" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="modalDebut.js"></script>
  <script src="memory.js"></script>
</body>

</html>