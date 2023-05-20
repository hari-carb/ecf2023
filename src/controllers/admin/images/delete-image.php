<?php

if (isset($_GET['id']) && !empty($_GET['id']))
{
        require __DIR__ .'/../../../model/images/delete-image.php';
        $_SESSION['flash']['success'] = 'L\'image a bien été supprimée';
        header('Location: admin-images.php');
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
}