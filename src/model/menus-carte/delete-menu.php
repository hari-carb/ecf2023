<?php

require_once __DIR__ .'/../db.php';
$getIdMenu = $_GET['menuId'];
$coursesMenu = $pdo->prepare('SELECT * FROM plats_menus WHERE menus_id = ?');
$coursesMenu->execute(array($getIdMenu));

$getIdCourse = $_GET['platId'];
$deleteCourse = $pdo->prepare('DELETE FROM plats_menus WHERE plats_id = ? AND menus_id =?');
$deleteCourse->execute(array($getIdCourse, $getIdMenu));
