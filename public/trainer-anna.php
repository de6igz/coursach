<?php
$pageCss = '/assets/css/pages/trainer.css';
include 'includes/header.php';
?>
<main class="trainer-page">
    <div class="breadcrumb"><a href="#">О студии</a> — тренер Анна</div>
    <section class="profile-wrapper">
        <img class="profile-photo" src="https://picsum.photos/300/400?random=16" alt="Анна Петрова">
        <div class="content">
            <div class="profile-info">
                <h1>
                    Анна Петрова
                    <span class="rating" style="--percent:90%">
                        <span class="value">4.8</span>
                        <span class="stars"></span>
                        <span>(100 отзывов)</span>
                    </span>
                </h1>
                <p class="about"><strong>О себе:</strong> преподаватель йоги с 8-летним стажем,
                    сертифицированный специалист Yoga Alliance. Веду классы Хатха-йоги,
                    йогатерапии и медитации.</p>
            </div>
            <h2 class="section-title">Направления</h2>
            <div class="directions-grid">
                <article class="card">
                    <img src="https://picsum.photos/600/400?random=5" alt="Хатха Йога">
                    <div class="card-body">
                        <h3>Хатха йога</h3>
                        <p>Чудодейственное средство, дарующее человеку очищение сознания и гармонию тела.</p>
                    </div>
                </article>
                <article class="card">
                    <img src="https://picsum.photos/600/400?random=6" alt="Йогатерапия">
                    <div class="card-body">
                        <h3>Йогатерапия</h3>
                        <p>Совокупность техник йоги, направленных на избавление от проблем и формирование здорового тела.</p>
                    </div>
                </article>
            </div>
            <div class="reviews-header">
                <h2 class="section-title" style="margin:0">Отзывы</h2>
                <a href="#" style="color:#4ea166;text-decoration:none;font-weight:500">Посмотреть все</a>
            </div>
            <div class="reviews-list">
                <div class="review">
                    <div class="left" style="--percent:100%">
                        <span class="rev-stars"></span>
                        <small>email@email.com<br>01.09.2024</small>
                    </div>
                    <div class="body">
                        <strong>Хатха йога</strong>
                        <p>Всё понравилось</p>
                    </div>
                </div>
                <div class="review">
                    <div class="left" style="--percent:100%">
                        <span class="rev-stars"></span>
                        <small>email@email.com<br>05.09.2024</small>
                    </div>
                    <div class="body">
                        <strong>Йогатерапия</strong>
                        <p>Отличный коуч</p>
                    </div>
                </div>
                <div class="review">
                    <div class="left" style="--percent:70%">
                        <span class="rev-stars"></span>
                        <small>email@email.com<br>12.09.2024</small>
                    </div>
                    <div class="body">
                        <strong>Йогатерапия</strong>
                        <p>Классное занятие, немного не хватило пояснений</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
