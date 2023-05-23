<?php
session_start();

if (isset($_GET['id']) && !empty($_GET['id']))
{
    require __DIR__ .'/../../../model/log/getIdUser.php';
    require __DIR__ .'/../../../model/log/delete-user.php';
    if ($deleteUser)
    {
        $deleteUser = null;
    
    $_SESSION['flash']['success'] = "L'utilisateur a bien été supprimé";
    header('location: admin-users.php');
    exit();
    }else
    {
        $_SESSION['flash']['success'] = "LL'utilisateur n'a pas été supprimé";
        header('location: admin-images.php');
        exit();
    }
}else
{
    $_SESSION['flash']['danger'] = "L'identifiant n'a pas été récupéré";
    header('location: admin-users.php');
    exit();
}