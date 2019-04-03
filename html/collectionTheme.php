<?php
require_once('init.php');
session_start();
$_SESSION["animaux2"]=$_POST['animaux2'];
$_SESSION["monuments2"]=$_POST['monuments2'];
$_SESSION["drapeaux2"]=$_POST['drapeaux2'];
$_SESSION["mythes2"]=$_POST['mythologie2'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/collectionsTheme.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="../pictures/favicon.ico">
    <title>Collection</title>

</head>

<body id="animation">
    <header>
        <nav>
            <a href="age.php"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
            <?php
                echo '<a href="compte.php"><img src="';
                $db = getDatabase();
                $req1 = $db->prepare("SELECT avatar FROM Utilisateur WHERE id = '".$_SESSION['userId']."'");
                $req1->execute();
                $user2 = $req1->fetchAll(PDO::FETCH_ASSOC);
                if($user2[0]['avatar']!=NULL){
                   echo $user2[0]['avatar'];
                } else{
                  echo '../../pictures/svg/avatarbeta.svg';
                }
                   
                echo ' "alt="Compte utilisateur" class="avatarCompte">';
                echo '</a>';
            ?>
        </nav>
        <?php
            $animaux='animaux';
            $drapeaux='drapeaux';
            $monuments='monuments';
            $mythologie='mythologie';
            $db = getDatabase();
          
            if ($_POST['animaux2']!=null){
                $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$animaux.'"');
                $_SESSION['cate'] = $animaux;
            }
            else if ($_POST['monuments2']!=null){
                $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$monuments.'"');
                $_SESSION['cate'] = $monuments;
            }
            else if ($_POST['drapeaux2']!=null){
                $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$drapeaux.'"');
                $_SESSION['cate'] = $drapeaux;
            }
            else if ($_POST['mythologie2']!=null){
                $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$mythologie.'"');
                $_SESSION['cate'] = $mythologie;
            }
        ?>
        <h1>Collection <?= $_SESSION['cate']; ?></h1>
    </header>
    <div class="galerie">
        <!-- Button trigger modal -->
        <?php
//            $db = getDatabase();
//$req2 = $db ->query('SELECT * FROM Collection');
//       $array2 = $req2->fetchAll(PDO::FETCH_ASSOC);
//                      $array = $req->fetchAll(PDO::FETCH_ASSOC);       
//                     while($i<count($array)){
//                        if($array2[$i]['joueur']!=$_SESSION["userId"]){
            $db = getDatabase();
                $array = $req->fetchAll(PDO::FETCH_ASSOC);   
                echo '<div>';                  
                for($i=0;$i<count($array);$i++){
                    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalImage">';
                    echo '<img src="';
                    echo $array[$i]['image_jeu'];
                    echo '" alt="Image de la collection"
                    class="imgAnimaux">';
                    echo '<img src="../pictures/svg/locked.svg" alt="" class="locked">';
                    echo '</button>';
                }
                echo '</div>';
//                        else{
//                           echo ' <div class="col-8">
//                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">';
//                            echo '<img src="';
//                            echo $array[$i]['image_jeu'];
//                            echo '" alt="Image de la collection">';
//                            echo '</button>';
//                                    echo ' <div class="col-4"></div>
//                            <div class="col-5"></div>
//                            <div class="col-7">';
//                            echo '</div>';
//                            echo'
//                           </button>
//                           </div>';
//                           $i++;
//                        }
//                         }
        ?>
    </div>

    <a class="retour" href="retour.php"><img src="../pictures/svg/flecheretour.svg"
            alt="Retour à la page précédente"></a>

    <!-- MODAL DESCRIPTION IMAGE -->
    <div class="modal fade" id="modalImage" tabindex="-1" role="dialog"
        aria-labelledby="modalImageCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="maodalImageCenterTitle">Nom non disponible</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Description non disponible, jouer pour débloquer des images
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="/js/animation.js"></script>
</body>

</html>