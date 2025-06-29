<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YogaStyle</title>
  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/main.css">
<?php
  $styles = [];
  if (isset($pageCss)) {
      $styles = is_array($pageCss) ? $pageCss : [$pageCss];
  }
  if (isset($extraCss)) {
      $styles = array_merge($styles, is_array($extraCss) ? $extraCss : [$extraCss]);
  }
  foreach ($styles as $css) {
      echo "  <link rel=\"stylesheet\" href=\"$css\">\n";
  }
?>
</head>
<body>
<header class="main-header">
  <div class="header-container">
    <a href="/" class="logo">YogaStyle</a>
    <nav class="main-nav">
      <a href="/directions.php"<?= isset($activePage) && $activePage==='directions' ? ' class="active"' : '' ?>>Направления</a>
      <a href="/schedule.php"<?= isset($activePage) && $activePage==='schedule' ? ' class="active"' : '' ?>>Расписание</a>
      <a href="#">Абонементы</a>
      <a href="#">Контакты</a>
      <a href="#">О студии</a>
      <a href="#">Блог</a>
    </nav>
  </div>
  <div class="nav-underline"></div>
</header>
