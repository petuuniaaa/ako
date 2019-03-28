<?php  
session_start();
require_once('init.php');
$errors = [];
 if (empty($_POST['pseudo'])) {
      array_push($errors, "Pseudo est requis");
    } else {
      $db = getDatabase();
      $stmt = $db->prepare("SELECT * FROM Utilisateur WHERE pseudo = :pseudo LIMIT 1");
        
      $stmt->execute(array("pseudo" => $_POST['pseudo']));
     $_SESSION["pseudo"]=$_POST['pseudo'];
      $user = $stmt->fetch();
      $db = null;

      if (!empty($user)) {
        if (password_verify($_POST['password'], $user['password'])) {
          $_SESSION['userId'] = $user['id'];
          header("Location: ./bienvenue.php");
          exit();
        } else {
          array_push($errors, "Mot de passe faux");
        }
      } else {
        array_push($errors, "Aucun compte trouvé");
      }
    }
 if (empty($errors)) {
      header("Location: ./bienvenue.php");
    } else {
      header("Location: ./newUser.php?" . http_build_query(array('errors' => $errors)));
    }
  $db = null;
?>