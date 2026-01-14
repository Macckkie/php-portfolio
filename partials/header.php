<?php
?>
<!doctype html>
<html lang="bg">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title ?? "My Portfolio") ?></title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="container header">
  <div class="brand">
  <a href="index.php" class="logo-link">
    <img src="assets/images/logo.png" alt="Mihail Peev Logo" class="logo">
  </a>
</div>

  <nav class="nav">
    <a href="index.php">Начало</a>
    <a href="projects.php">Проекти</a>
    <a href="contact.php">Контакт</a>
  </nav>
</header>
<main class="container">
