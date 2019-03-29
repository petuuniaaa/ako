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
    <link rel="stylesheet" href="../css/collectionsTheme.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="../pictures/favicon.ico">
    <title>Thèmes 6-8 ans</title>

</head>
<?php
                   $animaux='animaux';
                   $drapeaux='drapeaux';
                   $monuments='monuments';
                   $mythologie='mythologie';
                  $db = getDatabase();
          
                      if ($_SESSION["animaux"]!=null){
            $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$animaux.'"');
            $_SESSION['cate'] = $animaux;
          }
              else if ($_SESSION["monuments"]!=null){
                  $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$monuments.'"');
                  $_SESSION['cate'] = $monuments;
              }
                    else if ($_SESSION["drapeaux"]!=null){
                  $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$drapeaux.'"');
                  $_SESSION['cate'] = $drapeaux;
              }
                        else if ($_SESSION["mythes"]!=null){
                  $req = $db ->query('SELECT image_jeu FROM Image_jeu WHERE theme = "'.$mythologie.'"');
                  $_SESSION['cate'] = $mythologie;
              }
?>
<body>
    <header>
        <nav>
            <a href="age.php"><img src="../../pictures/svg/logo_ako.svg" alt="Accueil" class="logo"></a>
            <?php
                       $db = getDatabase();
                       $img = $db->prepare("SELECT avatar FROM Utilisateur WHERE id = '".$_SESSION['userId']."'");
$img->execute();
       $user = $img->fetchAll(PDO::FETCH_ASSOC);
    //    <?=$user[0]['avatar'];?>
            <a href="compte.php"><img src="<?=$user[0]['avatar'];?>" alt="Compte utilisateur"
                    class="avatarCompte">
            </a>
        </nav>
        <h1>Collection <?= $_SESSION['cate']; ?></h1>
    </header>
    <div class="galerie">
        <!-- Button trigger modal -->
        <div class="container">
            <div class="row">
       
               
                    <?php
                      $db = getDatabase();
                      $array = $req->fetchAll(PDO::FETCH_ASSOC);                     
                     for($i=0;$i<count($array);$i++){
                         echo ' <div class="col-8">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">';
                          echo '<img src="';
                          echo $array[$i]['image_jeu'];
                          echo '" alt="Image de la collection"
                          class="imgAnimaux">';
                          echo '<img src="../pictures/svg/locked.svg" alt="" class="locked">';
                          echo '</button>';
                                  echo ' <div class="col-4"></div>
                          <div class="col-5"></div>
                          <div class="col-7">';
                          echo '</div>';
                          echo'
                         </button>
                         </div>';
                         }
                         ?>
    <?php
//    $req = $db->query("SELECT joueur FROM Collection");
//    $coll[] = $req->fetch(PDO::FETCH_ASSOC);
//    var_dump($coll[11]['joueur']);
//    var_dump($_SESSION['userId']);
//    for($i=0;$i<count($coll);$i++){
//    if($_SESSION['userId']=$coll[$i]['joueur']){
//        echo '<p>';
//        echo $coll[$i]['joueur'];
//        echo '</p>';
//    }
//
//}
    ?>
            </div>
        </div>
    </div>

    <a class="retour" href="collections.php"><img src="../pictures/svg/flecheretour.svg"
            alt="Retour à la page précédente"></a>

    <!-- MODAL DESCRIPTION IMAGE -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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