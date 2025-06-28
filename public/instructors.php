<?php
$title = 'Instructors';
$bg    = 'https://images.unsplash.com/photo-1522199755839-a2bacb67c546?auto=format&fit=crop&w=1400&q=80';
include 'includes/header.php';
include 'includes/hero.php';
?>
<section class="py-5">
  <div class="container">
    <p class="lead text-center mb-5">Our certified teachers guide you through every pose</p>
    <div class="row g-4">
      <!-- пример одной карточки -->
      <div class="col-md-4">
        <div class="card h-100 text-center shadow-sm">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=800" class="card-img-top" alt="Anna Petrova">
          <div class="card-body">
            <h5 class="card-title">Anna Petrova</h5>
            <p class="card-text small">Certified yoga therapist with 10+ years of teaching experience.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-4">
            <a href="#" class="btn btn-outline-primary btn-sm me-1"><i class="bi bi-instagram"></i></a>
            <a href="#" class="btn btn-outline-primary btn-sm"><i class="bi bi-facebook"></i></a>
          </div>
        </div>
      </div>
      <!-- дублируйте/заменяйте остальные -->
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
