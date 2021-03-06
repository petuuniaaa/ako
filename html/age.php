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
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">

    <!-- SEO -->
    <meta name="keywords"
        content="Tamaïti Corp, Ako, AKO, application mobile android ios, application AKO, play store, app store, culture générale, amuser, apprendre, pieuvre, enfant, violet, bleu, enfants, age, avatar, compte">
    <meta name="description"
        content="Tamaïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">

    <meta property="og:title" content="Ako Game : Choix de l'âge" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://akogame.tamaiticorp.fr/html/age.php" />
    <meta property="og:image" content="https://akogame.tamaiticorp.fr/pictures/ako.png" />
    <meta property="og:description"
        content="Tamïti Corp : nouvelle application mobile AKO pour enfants. Acquérir de la culture générale tout en s'amusant !">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Ako Game">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/age.css">
    <link rel="icon" href="../pictures/favicon.ico">

    <title>Choix de l'âge</title>
</head>

<body>
    <header>
        <a href="#">
            <img src="../pictures/svg/logo_ako.svg" alt="Accueil" class="logo">
        </a>
        <a href="/html/compte.php">
        <?php
                       $db = getDatabase();
                       $req = $db->prepare("SELECT avatar FROM Utilisateur WHERE id = '".$_SESSION['userId']."'");
$req->execute();
       $user = $req->fetchAll(PDO::FETCH_ASSOC);
    //    <?=$user[0]['avatar'];
        ?>
            <img src="<?=$user[0]['avatar'];?>" alt="Compte utilisateur" class="avatarCompte">
        </a>
    </header>
    <section class="main">
        <a href="listTheme.php"><button>Jeux 6-8 ans</button></a>
        <a href="listTheme.php"><button class="indisponible">Jeux 8-10 ans</button></a>
    </section>

    <!-- MODAL EXPLICATIF -->
    <div class="modal" tabindex="-1" role="dialog" id="modalCompte">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <section class="debutJeu">
                        <img src="../pictures/svg/share.svg" alt="" class="fleche">

                        <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="ako">
                        <div class="circular-sb">
                            <p>Ici, tu peux choisir ton avatar, voir ta collection d'images, régler le temps de jeu et
                                te déconnecter</p>
                            <div class="circle3"></div>
                            <div class="circle4"></div>
                        </div>
                    </section>
                </div>

                <div class="modal-header">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.76 29.76" class="suivant">
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
                            <path class="cls-2"
                                d="M2.2,7.39A14.88,14.88,0,1,0,22.57,2.11,14.88,14.88,0,0,0,2.2,7.39Zm3.87,9.44c.3-2.69.84-5,10.49-4.51a.57.57,0,0,0,.6-.57c0-1.17-.07-3.71-.09-4.61A.14.14,0,0,1,17.3,7l6.88,6.64a.78.78,0,0,1,0,1.1l-6.64,6.89a.13.13,0,0,1-.23-.09l-.08-4.85a.55.55,0,0,0-.48-.55C7.47,15.77,6.07,16.83,6.07,16.83Z"
                                transform="translate(-0.15 -0.05)" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalAge">
        <section class="choix_age">
            <img src="../pictures/svg/share.svg" alt="" class="arrow">
            <img src="../pictures/svg/share.svg" alt="" class="arrow2">
            <img src="../pictures/svg/AKOOOO.svg" alt="Ako" class="AKO">
            <div class="circular-sb">
                <p>Choisis ton âge !</p>
                <div class="circle3"></div>
                <div class="circle4"></div>
            </div>
        </section>
    </div>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="/js/animation.js"></script>
    <script>
        if (localStorage.getItem('age') == null) {
            $("#modalCompte")
                .fadeIn("slow")
                .css('display', 'block');
            localStorage.setItem('age', 'true');
        }

        function close() {
            $('#modalCompte').hide();
            $("#modalAge")
                .fadeIn("slow")
                .css('display', 'block');
        }

        $('#close').on('click', close);
    </script>

</body>

</html>