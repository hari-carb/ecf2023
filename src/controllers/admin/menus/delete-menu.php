<?php
session_start();

if (isset($_GET['menuId']) && isset($_GET['platId']) && !empty($_GET['menuId']) && !empty($_GET['platId']))
{
    require __DIR__ .'/../../../model/menus-carte/delete-menu.php';
    $_SESSION['flash']['success'] = 'Le plat a bien été supprimé du menu';
    header('Location: admin-menus.php');
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant du plat n\'a pas été récupéré';
}
