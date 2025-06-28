<?php
/**
 * hero.php
 * Показывает большой баннер-обложку.
 * Ожидает $title и $bg (URL фона). Цвет текста берётся автоматом (светлый).
 */
?>
<section class="page-hero d-flex align-items-center text-center"
         style="background-image:url('<?= $bg ?>');">
  <div class="container position-relative z-1">
    <h1 class="display-4 fw-semibold"><?= $title ?></h1>
  </div>
  <div class="page-hero__overlay"></div>
</section>
