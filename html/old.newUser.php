<?php
// session_start();
// require_once('/outils/init.php');
?>

<?php  
  
//  ini_set('display_errors', 1);
//   ini_set('display_startup_errors', 1);
//   error_reporting(E_ALL);

//       if ($_SERVER['REQUEST_METHOD'] === "POST") {
//     $db = getDatabase();
//     $errors = [];
//     $attributes = [];
//     if (empty($_POST['pseudo'])) {
//       array_push($errors, "Pseudo is required");
//     } else {
//       $stmt = $db->prepare("SELECT * FROM Utilisateur WHERE pseudo = :pseudo LIMIT 1");
//       $stmt->execute(array("pseudo" => $_POST['pseudo']));
//       if ($stmt->rowCount() !== 0) {
//         array_push($errors, "Pseudo is already taken");
//       } else {
//         $attributes['pseudo'] = $_POST['pseudo'];
//           $_SESSION["pseudo"]=$_POST['pseudo'];
//       }
//     }





    //    if(strlen($_POST['password']) >= 8 &&
    //       strlen($_POST['password']) <=16){
            
    //        if (empty($_POST['password']) || empty($_POST['confirm_password'])){
    //           array_push($errors, "Password empty");
    // }
    
          
    //     elseif
    //    ( $_POST['password'] !== $_POST['confirm_password']) {
    //   array_push($errors, "Password don't match");
    // }

    //       else {
    //   $attributes['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // }
    //    }
    //       else{
    //            array_push($errors, "8 caracters minimun and 16 caracters maximun");
    //       }        
          
        
        
    // if (empty($errors)) {
    //   $stmt = $db->prepare("INSERT INTO Utilisateur (pseudo) VALUES (:pseudo)");
    //   try {
    //     $stmt->execute($attributes);
      
    //   } catch (PDOException $e) {
    //     array_push($errors, $e->getMessage());
    //   }
    // }






    // if (empty($errors)) {
    //   header("Location: ./bienvenue.php");
    // } else {
    //   header("Location: ./newUser.php?" . http_build_query(array('errors' => $errors)));
    // }

  // $db = null;
  // } else if ($_SERVER['REQUEST_METHOD'] === "GET") {
  //   http_response_code(500);
  // }
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
    <link rel="stylesheet" href="css/newUser.css">
    <title>Nouveau pseudo</title>
</head>

<body>
    <section class="conversation">
        <img src="/pictures/svg/AKOOOO.svg" alt="" class="ako">
        <div class="circular-sb">
            <p>Ecris ton pseudo !</p>
            <img src="/pictures/svg/boutonson.svg" alt="" class="son">
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
    </section>

    <form action="newUser.php" method="POST">
        <input type="text" name="pseudo" placeholder="Ton pseudo">
        <input type="submit" value="OK">
    </form>
</body>

</html>