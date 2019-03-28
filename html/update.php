<?php
require_once('init.php');
session_start();

if (isset($_SESSION["img"])) {
      $db = getDatabase();
    $stmt = $db->prepare("UPDATE Utilisateur SET avatar ='".$_SESSION['img']."' WHERE id = '".$_SESSION['userId']."'");
    $stmt->execute();
      header("Location: ./compte.php");
    } else {
      header("Location: ./updateAvatar.php?");
    }
  $db = null;
?>

