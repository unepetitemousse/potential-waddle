<?php
  require_once '../includes/include.php';

  if ($_POST['user_name']) {
    $username = trim($_POST['user_name']);
    $message = $foass->get(
      '/awesome/'.urlencode($username)
    );

    $stmt = $db->prepare("INSERT INTO USER (name, message) VALUES (:name, :message)");

    $stmt->bindParam('name', $username);
    $stmt->bindParam('message', $message->getBody()->getContents());

    $stmt->execute();
  }

  header('Location: index.php');
  die();