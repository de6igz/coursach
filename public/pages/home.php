<?php
$pageCss = '/assets/css/pages/home.css';
$extraCss = '/assets/css/components/trial-form.css';
include '../includes/header.php';
$trialSuccess = !empty($_GET['trial_success']);
?>
<main class="directions">
    <div class="directions-header">
        <h1>Направления</h1>
        <a href="/pages/all-practices.php" class="directions-link">Подробнее о практиках</a>
    </div>

    <div class="card-grid">
        <div class="card">
            <img src="/assets/img/pilates.png" alt="Пилатес">
            <div class="card-body">
                <h3>Пилатес</h3>
                <p>Пилатес — это серия упражнений для увеличения прочности тела, развития мышц, улучшения осанки, баланса и координации.</p>
            </div>
        </div>

        <div class="card">
            <img src="/assets/img/yogatherapy.png" alt="Йогатерапия">
            <div class="card-body">
                <h3>Йогатерапия</h3>
                <p>Йогатерапия — совокупность техник йоги, направленных на избавление от проблем и формирование здорового тела.</p>
            </div>
        </div>

        <div class="card">
            <img src="/assets/img/aerial.png" alt="Аэройога в гамаках">
            <div class="card-body">
                <h3>Аэройога в гамаках</h3>
                <p>Аэройога – эволюционное направление классической хатха-йоги, получило своё название от англ. Aerial Yoga, означающее «воздушная йога».</p>
            </div>
        </div>

        <div class="card">
            <img src="/assets/img/hatha.png" alt="Хатха йога">
            <div class="card-body">
                <h3>Хатха йога</h3>
                <p>Хатха-йога – чудодейственное средство, дарующее человеку очищение сознания и гармонию тела.</p>
            </div>
        </div>
    </div>
</main>
<?php include '../includes/trial-form.php'; ?>
<?php include '../includes/footer.php'; ?>
