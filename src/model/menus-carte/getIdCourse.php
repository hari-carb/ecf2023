<?php require __DIR__ .'/../db.php';

$getCourseId = $_GET['id'];
$courses = $pdo->prepare('SELECT * FROM plats WHERE id = ?');
$courses->execute(array($getCourseId));
$course=$courses->fetch();