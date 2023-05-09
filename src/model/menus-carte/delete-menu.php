<?php

if (isset($_GET['menuId']) && isset($_GET['platId']) && !empty($_GET['menuId']) && !empty($_GET['platId']))
{
    require_once __DIR__ .'/../db.php';
    $getIdMenu = $_GET['menuId'];
    $coursesMenu = $pdo->prepare('SELECT * FROM plats_menus WHERE menus_id = ?');
    $coursesMenu->execute(array($getIdMenu));

    $getIdCourse = $_GET['platId'];
    $deleteCourse = $pdo->prepare('DELETE FROM plats_menus WHERE plats_id = ? AND menus_id =?');
    $deleteCourse->execute(array($getIdCourse, $getIdMenu));
    $_SESSION['flash']['success'] = 'Le plat a bien été supprimé';
    header('Location: admin-menus.php');
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant du plat n\'a pas été récupéré';
}