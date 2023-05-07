<?php
session_start();

if (isset($_GET['id']) && !empty($_GET['id']))
{
    require __DIR__ .'/../../../model/menus-carte/delete-course.php';
    $_SESSION['flash']['success'] = 'Le plat a bien été supprimé';
    header('Location: admin-courses.php');
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant du plat n\'a pas été récupéré';
}