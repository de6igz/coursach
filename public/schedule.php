<?php
$title = 'Schedule';
$bg    = 'https://images.unsplash.com/photo-1506334572581-344b256329f4?auto=format&fit=crop&w=1400&q=80';
include 'includes/header.php';
include 'includes/hero.php';

$today = date('l');            // Monday, Tuesday…
$rows  = [
  ['Monday',    '08:00', 'Hatha'],
  ['Tuesday',   '18:30', 'Vinyasa Flow'],
  ['Wednesday', '20:00', 'Restorative'],
  ['Thursday',  '07:00', 'Morning Flow'],
  ['Saturday',  '10:00', 'Mixed Level'],
];
?>
<section class="py-5">
  <div class="container">
    <h2 class="section-title">This week</h2>
    <div class="table-responsive">
      <table class="table table-striped align-middle">
        <thead class="table-light">
          <tr><th>Day</th><th>Time</th><th>Class</th></tr>
        </thead>
        <tbody>
        <?php foreach ($rows as [$day,$time,$class]): ?>
          <tr <?= $day === $today ? 'class="table-info fw-semibold"' : '' ?>>
            <td><?= $day ?></td><td><?= $time ?></td><td><?= $class ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
