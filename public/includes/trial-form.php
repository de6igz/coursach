<?php
/**
 * Trial signup form component.
 * Expects $trialSuccess boolean flag to show success message.
 */
?>
<section class="trial-banner">
  <div class="trial-box">
    <h1>Первая тренировка</h1>
    <div class="price">500 рублей</div>
    <div class="note">*Бесплатно — при покупке абонемента в этот же день</div>
    <?php if (!empty($trialSuccess)): ?>
      <div class="trial-success">Спасибо! Мы свяжемся с вами.</div>
    <?php endif; ?>
    <form class="trial-form" action="/submit_trial.php" method="POST">
      <input type="text" name="name" placeholder="Имя" required>
      <input type="tel" name="phone" placeholder="Номер телефона" pattern="\+?[0-9\s\-()]{7,}" required>
      <input type="email" name="email" placeholder="Электронная почта" required>
      <button type="submit">Записаться</button>
    </form>
  </div>
</section>
