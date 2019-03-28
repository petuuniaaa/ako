<?php
 session_start();
 require_once('init.php');
  ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
       if ($_SERVER['REQUEST_METHOD'] === "POST") {
     $db = getDatabase();
     $errors = [];
     $attributes = [];
     if (empty($_POST['pseudo'])) {
       array_push($errors, "Pseudo écrit ton pseudo");
     } else {
       $stmt = $db->prepare("SELECT * FROM Utilisateur WHERE pseudo = :pseudo LIMIT 1");
       $stmt->execute(array("pseudo" => $_POST['pseudo']));
       if ($stmt->rowCount() !== 0) {
         array_push($errors, "Pseudo déjà pris");
       } else {
         $attributes['pseudo'] = $_POST['pseudo'];
       }
                if(isset($_POST['password'])){
       $attributes['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }
     }
     if (empty($errors)) {
       $stmt = $db->prepare("INSERT INTO Utilisateur (pseudo, password) VALUES (:pseudo, :password)");
         $_SESSION["pseudo"]=$_POST['pseudo'];
       $idfet = $db->prepare("SELECT * FROM Utilisateur WHERE id = :id LIMIT 1");
       $user = $idfet->fetch();
       $_SESSION['userId'] = $user['id'];
       try {
         $stmt->execute($attributes);
       } catch (PDOException $e) {
         array_push($errors, $e->getMessage());
       }
     }
     if (empty($errors)) {
       header("Location: ./bienvenue.php");
     } else {
       header("Location: ./newUser.php?" . http_build_query(array('errors' => $errors)));
     }
   $db = null;
   } else if ($_SERVER['REQUEST_METHOD'] === "GET") {
     http_response_code(500);
   }?>