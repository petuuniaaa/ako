<?php
session_start();
require_once('init.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8"/>
  <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
  <title>Memory Game</title>

  <link rel="stylesheet" href="jeuGagne.css">
</head>

<body>
  <header>
    <nav>
      <a href="../../html/age.html"><img src="pictures/svg/logo_ako.svg" alt="logo"></a>
      <a href="../../html/compte.html"><img src="pictures/svg/avatarbeta.svg" alt="avatar"></a>
    </nav>
    <h1>Memory</h1>
  </header>
<!--description-->
  <section class="main">
    <?php
  $db = getDatabase();
      $req = $db ->query('SELECT * FROM Image_jeu WHERE theme = "animaux"');
      $array = $req->fetchAll(PDO::FETCH_ASSOC);
      shuffle($array);
      $i = rand(1,9);
    echo '<p>';
        echo $array[$i]['description'];
    echo '</p>';
    ?>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati eius, molestias assumenda at optio illo
      dolorem soluta, tempore perferendis labore odio libero officiis dolores repellendus? Sunt omnis eveniet
      accusantium odio.</p> -->
  </section>

  <section class="footer">
    <img src="pictures/svg/Ako-coloree-intello.svg" alt="" class="ako">
      
<!--image gagner au hasard parmi le theme choisi -->

    <?php
    echo '<img src="';
    echo $array[$i]['image_jeu'];
    echo '" alt=" " class="animo">';
    ?>
    <button class="son notactived" type="image"></button>
    <button class="suivant" onclick="redirectionImgCollection()">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 30 30" xml:space="preserve">
        <style type="text/css">
          .st0 {
            fill: #765593;
          }
        </style>
        <path class="st0" d="M2.2,7.4C-2,14.5,0.4,23.6,7.5,27.8s16.2,1.8,20.4-5.3s1.8-16.2-5.3-20.4S6.4,0.3,2.2,7.4z M6.1,16.8
       c0.3-2.7,0.8-5,10.5-4.5c0.3,0,0.6-0.2,0.6-0.6c0-1.2-0.1-3.7-0.1-4.6C17.1,7,17.2,7,17.3,7l6.9,6.6c0.3,0.3,0.3,0.8,0,1.1l-6.6,6.9
       c-0.1,0.1-0.2,0-0.2-0.1l-0.1-4.8c0-0.3-0.2-0.5-0.5-0.6C7.5,15.8,6.1,16.8,6.1,16.8z" />
      </svg>
    </button>
  </section>

  <script>
    function redirectionImgCollection() {
      window.location.href = 'jeuNewImg.html';
    }
  </script>
</body>

</html>