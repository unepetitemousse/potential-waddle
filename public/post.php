<?php
  require_once '../includes/include.php';

  if ($_POST['user_name']) {
    $stmt = $file_db->prepare("INSERT INTO USER (name) 
                VALUES (:name)");

    $stmt->bindParam('name', trim($_POST['user_name']));
    var_dump($stmt->execute());
  }

  header('Location: index.php');