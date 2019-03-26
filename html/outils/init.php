
<?php
define('DB_HOST', 'mysql:host=localhost;dbname=philippetran_tamaiticorp');
  define('DB_USER', 'philippetran_admin');
  define('DB_PASSWORD', 'tamaiticorp');
  $currentUser = null;

  function getDatabase() {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }
  $db = getDatabase();
?>