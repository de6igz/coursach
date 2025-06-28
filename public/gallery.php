<?php
$title = 'Gallery';
$bg    = 'https://images.unsplash.com/photo-1545205597-3d02a9d7b76e?auto=format&fit=crop&w=1400&q=80';
include 'includes/header.php';
include 'includes/hero.php';
?>
<section class="py-5">
  <div class="container">
    <p class="lead text-center mb-5">A glimpse into our classes and community</p>

    <div class="row g-4" data-masonry='{"percentPosition": true }'>
      <?php
      // можно заменить на реальный цикл из БД
      $pics = [
        'https://images.unsplash.com/photo-1551907234-314bb5725081?w=800',
        'https://images.unsplash.com/photo-1518611012118-696072aa579a?w=800',
        'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=800',
        'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=800',
        'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=800'
      ];
      foreach ($pics as $src): ?>
        <div class="col-6 col-md-4 col-lg-3">
          <img class="img-fluid rounded shadow-sm" src="<?= $src ?>" alt="Yoga studio">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
