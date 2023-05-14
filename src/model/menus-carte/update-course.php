<?php
require __DIR__ .'/../db.php';
$getCourseId = $_GET['id'];
$courses = $pdo->prepare('SELECT * FROM plats WHERE id = ?');
$courses->execute(array($getCourseId));
$course=$courses->fetch();

$updateCourse = $pdo->prepare("UPDATE plats SET title = ?, description = ?, price= ? WHERE id = '$getCourseId'");
$updateCourse->execute(array($_POST['title'], $_POST['description'], $_POST['price']));


$cat = $pdo->prepare("UPDATE plats_categories SET c1_id = ?, c2_id = ? WHERE plats_id = '$getCourseId'");
$cat->execute(array($_POST['cat1'], $_POST['cat2']));