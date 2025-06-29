<?php
/**
 * Trial signup form component.
 * Expects $trialSuccess boolean flag to show success message.
 */
?>
<section class="trial-form-section">
  <div class="form-container">
    <div class="header">
        <h1>Первая тренировка</h1>
        <div class="price">500 рублей</div>
        <div class="free-offer">*Бесплатно — при покупке абонемента в этот же день</div>
    </div>
    <?php if (!empty($trialSuccess)): ?>
      <div class="trial-success">Спасибо! Мы свяжемся с вами.</div>
    <?php endif; ?>
    <form action="/submit_trial.php" method="POST">
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder=" " required>
            <label for="name">Имя</label>
        </div>

        <div class="form-group">
            <input type="tel" id="phone" name="phone" placeholder=" " required>
            <label for="phone">Номер телефона</label>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" placeholder=" " required>
            <label for="email">Электронная почта</label>
        </div>

        <button type="submit">Записаться</button>
    </form>
  </div>
</section>
