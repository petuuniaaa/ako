<?php
$currentUser = null;
setCurrentUser();
function setCurrentUser() {
    global $currentUser;
    if (isset($_SESSION['userId'])) {
      $db = getDatabase();
      $stmt = $db->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
      $stmt->execute(array('id' => $_SESSION['userId']));
      $currentUser = $stmt->fetch();
    }
  }
  ?>