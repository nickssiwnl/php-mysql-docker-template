<?php
include '../includes/page-top.php';
include '../includes/courses-functions.php';

$area = $_GET['area'] ?? '';
$courses = getCoursesByArea($area);
?>

<div class="container mt-4">
    <h2>Cursos de <?= ucfirst($area) ?></h2>
    <div class="row">
        <?php foreach ($courses as $course): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/<?= $course['image'] ?>" class="card-img-top" alt="<?= $course['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="curso-detalhe.php?id=<?= $course['id'] ?>">
                                <?= $course['title'] ?>
                            </a>
                        </h5>
                        <p class="card-text"><?= $course['short_description'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../includes/page-bottom.php'; ?>