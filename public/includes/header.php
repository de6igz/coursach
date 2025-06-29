<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YogaStyle</title>
  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/main.css">

  <style>
    html, body { margin: 0; }

    .main-header { background:#f7f4f0; }
    .header-container {
      max-width: 1400px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      padding: 18px 32px 10px 32px;
    }
    .logo {
      font-family: 'Mr Dafoe', cursive;
      font-size: 2.4rem;
      color: #222;
      margin-right: 48px;
      white-space: nowrap;
    }
    .main-nav {
      display: flex;
      gap: 38px;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.25rem;
      font-weight: 400;
    }
    .main-nav a {
      color: #222;
      text-decoration: none;
      transition: color 0.2s;
    }
    .main-nav a:hover {
      color: #4ea166;
    }
    @media (max-width: 900px) {
      .header-container {
        flex-direction: column;
        align-items: flex-start;
        padding: 14px 10px 8px 10px;
      }
      .main-nav {
        gap: 18px;
        font-size: 1.05rem;
        flex-wrap: wrap;
      }
      .logo {
        margin-bottom: 8px;
        font-size: 2rem;
      }
    }

  </style>
</head>
<body>
<header class="main-header">
  <div class="header-container">
    <div class="logo">YogaStyle</div>
    <nav class="main-nav">
      <a href="/pages/home.php">Направления</a>
      <a href="#">Расписание</a>
      <a href="#">Абонементы</a>
      <a href="#">Контакты</a>
      <a href="#">О студии</a>
      <a href="#">Блог</a>
    </nav>
  </div>
</header>
