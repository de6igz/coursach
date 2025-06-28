<?php
$title = 'Blog';
$bg    = 'https://images.unsplash.com/photo-1554244933-d876deb6b2ff?auto=format&fit=crop&w=1400&q=80';
include 'includes/header.php';
include 'includes/hero.php';
?>
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <article class="card h-100 shadow-sm">
          <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=800" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="h5">5 Tips for Establishing a Daily Practice</h2>
            <p class="card-text small">Consistency is key when it comes to yoga. Start with short sessions…</p>
          </div>
          <a href="#" class="stretched-link"></a>
        </article>
      </div>
      <div class="col-md-6 col-lg-4">
        <article class="card h-100 shadow-sm">
          <img src="https://images.unsplash.com/photo-1551907234-314bb5725081?w=800" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="h5">Breathwork for Stress Relief</h2>
            <p class="card-text small">Simple breathing exercises can calm the mind and reduce anxiety…</p>
          </div>
          <a href="#" class="stretched-link"></a>
        </article>
      </div>
      <!-- добавляйте статьи циклом -->
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
