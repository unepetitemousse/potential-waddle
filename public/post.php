<?php
  require_once '../includes/include.php';

  if ($_POST['user_name']) {
    $stmt = $db->prepare("INSERT INTO USER (name) VALUES (:name)");

    $stmt->bindParam('name', trim($_POST['user_name']));
  }

  header('Location: index.php');
  die();