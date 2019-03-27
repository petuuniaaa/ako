<?php
session_start();
require_once('/outils/init.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="../css/newUser.css">
    <title>Nouveau pseudo</title>
</head>

<body>
    <section class="conversation">
        <img src="../pictures/svg/AKOOOO.svg" alt="" class="ako">
        <div class="circular-sb">
            <p>Ecris ton pseudo !</p>
            <img src="../pictures/svg/boutonson.svg" alt="" class="son">
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </section>

    <form action="bienvenue.php" method="POST">
        <input type="text" name="pseudo" placeholder="Ton pseudo">
        <input type="submit" value="OK">
    </form>
</body>

</html>
