<?php require __DIR__ .'/../db.php';

$getCourseId = $_GET['id'];
$courses = $pdo->prepare('SELECT * FROM plats WHERE id = ?');
$courses->execute(array($getCourseId));
$course=$courses->fetch();


$cat = $pdo->prepare("SELECT * FROM plats_categories WHERE plats_id = ?");
$cat->execute(array($getCourseId));
$categories=$cat->fetch();