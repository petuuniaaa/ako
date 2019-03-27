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
    <link rel="stylesheet" href="../css/bienvenue.css">
    <title>Bienvenue sur Ako</title>
</head>

<body>
    <section class="conversation">
        <div class="circular-sb">
            <p>Bienvenue <?php echo $_SESSION["pseudo"];?></p>
            <img src="/pictures/svg/boutonson.svg" alt="" class="son">
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <img src="/pictures/svg/AKOOOO.svg" alt="" class="ako">
    </section>
    <p class="text">Découvrir le jeu</p>
    <button class="suivant" onclick="redirectionSuivant()">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 268.832 268.832"
            style="enable-background:new 0 0 268.832 268.832;" xml:space="preserve">
            <g>
                <path d="M265.171,125.577l-80-80c-4.881-4.881-12.797-4.881-17.678,0c-4.882,4.882-4.882,12.796,0,17.678l58.661,58.661H12.5
                       c-6.903,0-12.5,5.597-12.5,12.5c0,6.902,5.597,12.5,12.5,12.5h213.654l-58.659,58.661c-4.882,4.882-4.882,12.796,0,17.678
                       c2.44,2.439,5.64,3.661,8.839,3.661s6.398-1.222,8.839-3.661l79.998-80C270.053,138.373,270.053,130.459,265.171,125.577z" />
            </g>
        </svg>
    </button>

    <script>
        function redirectionSuivant() {
            window.location.href = 'age.html';
        }
    </script>
</body>

</html>