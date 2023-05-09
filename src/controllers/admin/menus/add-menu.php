<?php
session_start();
require_once __DIR__ .'/../../../model/db.php';

if (isset($_GET['id']) && !empty($_GET['id']))
{
    $getIdMenu = $_GET['id'];
    $menus = $pdo->prepare('SELECT * FROM menus WHERE id = ?');
    $menus->execute(array($getIdMenu));
    if ($menus->rowCount() > 0)
    {
        if (!empty($_POST['addCourseMenu']))
        {
        $addCourseInMenu = $pdo->prepare('INSERT INTO plats_menus(plats_id, menus_id) VALUES(?, ?)');
        $addCourseInMenu->execute(array($_POST['addCourseMenu'], $getIdMenu));
        $_SESSION['flash']['success'] = 'Le plat a bien été ajouté au menu';
        header('Location:admin-menus.php');
        }
    }else
    {
        $_SESSION['flash']['danger'] = 'Aucun membre n\'a été trouvé';
    }
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
}

require __DIR__ .'/../../../../templates/admin/menus/add-menu.php';