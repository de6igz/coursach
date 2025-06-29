<?php
$pageCss = '/assets/css/pages/schedule.css';
$activePage = 'schedule';
include 'includes/header.php';
?>
<main class="wrapper">
  <h1>Расписание</h1>

  <div class="legend">
    <div class="item"><span class="dot base"></span><span>Базовый уровень</span></div>
    <div class="item"><span class="dot adv"></span><span>Продвинутый уровень</span></div>
  </div>

  <table id="schedule">
    <tr>
      <th></th>
      <th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th>Сб</th><th>Вс</th>
    </tr>

    <tr>
      <th><span>11:00</span></th>
      <td><div class="cell base">Хатха‑йога</div></td><td></td><td></td><td></td><td></td><td><div class="cell adv">Силовая йога</div></td><td></td>
    </tr>

    <tr>
      <th><span>12:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>13:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>14:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>15:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>16:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>17:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>18:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr>
      <th><span>19:00</span></th><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
  </table>
</main>
<?php include 'includes/footer.php'; ?>
