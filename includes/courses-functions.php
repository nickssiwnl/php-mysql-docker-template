<?php
function getAllCourses(): array {
    $json = file_get_contents(__DIR__ . '/../assets/courses.json');
    return json_decode($json, true);
}

function getCoursesByArea(string $area): array {
    $allCourses = getAllCourses();
    $filtered = [];

    foreach ($allCourses as $course) {
        if ($course['area'] === $area) {
            $filtered[] = $course;
        }
    }

    return $filtered;
}

function getCourseById(string $id): ?array {
    $allCourses = getAllCourses();

    foreach ($allCourses as $course) {
        if ($course['id'] === $id) {
            return $course;
        }
    }

    return null;
}
?>