<?php
include '../includes/page-top.php';
include '../includes/courses-functions.php';

$courseId = $_GET['id'] ?? '';
$course = getCourseById($courseId);
?>

<div class="container mt-4">
    <?php if ($course): ?>
        <h1><?= $course['title'] ?></h1>
        <h4>Instrutor: <?= $course['instructor'] ?></h4>
        <p><?= $course['short_description'] ?></p>

        <h5>Módulos:</h5>
        <ul>
            <?php foreach ($course['modules'] as $module): ?>
                <li><?= $module ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <div class="alert alert-danger">Curso não encontrado.</div>
    <?php endif; ?>
</div>

<?php include '../includes/page-bottom.php'; ?>