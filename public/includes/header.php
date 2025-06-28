<?php
// public/includes/header.php

// определяем текущую страницу (например, classes.php)
$active = basename($_SERVER['SCRIPT_NAME']);

$links = [
  'index.php'       => 'Home',
  'about.php'       => 'About',
  'classes.php'     => 'Classes',
  'schedule.php'    => 'Schedule',
  'instructors.php' => 'Instructors',
  'gallery.php'     => 'Gallery',
  'blog.php'        => 'Blog',
  'packages.php'    => 'Packages',
  'contact.php'     => 'Contact',
  'signup.php'      => 'Sign Up',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yoga Studio<?= isset($links[$active]) ? ' | ' . $links[$active] : '' ?></title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Google Font + кастомные стили -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">

  <!-- Favicon (опционально) -->
  <link rel="icon" href="/assets/favicon.svg" type="image/svg+xml">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand fw-semibold" href="/index.php">Yoga Studio</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="mainMenu" aria-labelledby="menuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="menuLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto">
          <?php foreach ($links as $file => $label): ?>
            <li class="nav-item">
              <a class="nav-link <?= $active === $file ? 'active' : '' ?>" href="/<?= $file ?>">
                <?= $label ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="collapse navbar-collapse d-none d-lg-block">
      <ul class="navbar-nav ms-auto">
        <?php foreach ($links as $file => $label): ?>
          <li class="nav-item">
            <a class="nav-link <?= $active === $file ? 'active' : '' ?>" href="/<?= $file ?>">
              <?= $label ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
