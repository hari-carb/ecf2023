<?php

require __DIR__ .'/../db.php';
$updateCourse = $pdo->prepare("UPDATE plats SET title = ?, description = ?, price= ? WHERE id = '$getCourseId'");
$updateCourse->execute(array($_POST['title'], $_POST['description'], $_POST['price']));

$updateCat = $pdo->prepare("UPDATE plats_categories SET c1_id = ?, c2_id = ? WHERE plats_id = '$getCourseId'");
$updateCat->execute(array($_POST['cat1'], $_POST['cat2']));