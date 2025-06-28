<?php
$title = 'Classes';
$bg    = 'https://images.unsplash.com/photo-1596484557139-5c1c49b2abe0?auto=format&fit=crop&w=1400&q=80';
include 'includes/header.php';
include 'includes/hero.php';
?>

<section class="py-5">
  <div class="container">
    <h2 class="section-title">Choose your style</h2>
    <div class="row g-4">
      <?php
      $classes = [
        ['Vinyasa Flow', 'Dynamic practice linking breath and movement.', 'https://images.unsplash.com/photo-1554290764-4b62c1e6e23c?w=800'],
        ['Hatha',        'Slower pace focusing on alignment and mindful breathing.', 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=800'],
        ['Restorative',  'Gentle poses with props to calm the nervous system.', 'https://images.unsplash.com/photo-1540206395-68808572332f?w=800'],
        ['Yin',          'Deep stretch with long holds to target connective tissue.', 'https://images.unsplash.com/photo-1531938712298-28d17f8f033b?w=800'],
        ['Power Yoga',   'Fast-paced, sweat-inducing flow for strength.', 'https://images.unsplash.com/photo-1562072849-1cac0bbb6b47?w=800'],
        ['Prenatal',     'Safe practice supporting expecting mothers.', 'https://images.unsplash.com/photo-1557336059-3513e6873474?w=800'],
      ];
      foreach ($classes as [$name,$text,$img]): ?>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= $img ?>" class="card-img-top" alt="<?= $name ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $name ?></h5>
              <p class="card-text"><?= $text ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
