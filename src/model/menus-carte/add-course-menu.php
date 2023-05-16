<?php
require __DIR__ .'/../db.php';

$coursesMenu = $pdo->prepare('SELECT * FROM plats_menus WHERE menus_id = ?');
$coursesMenu->execute(array($_POST['menuId']));

$addCourse = $pdo->prepare('INSERT INTO plats_menus(plats_id, menus_id) VALUES(?, ?)');
$addCourse->execute(array($_POST['addCourseMenu'], $_POST['menuId']));