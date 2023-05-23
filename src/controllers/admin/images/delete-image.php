<?php
session_start();


    require __DIR__ .'/../../../model/images/delete-image.php';
    if ($deletePhoto)
    {
        $deletePhoto = null;
        $_SESSION['flash']['success'] = "L'image a bien été supprimée";
        header('location: admin-images.php');
        exit();
    }else
    {
        $_SESSION['flash']['success'] = "L'image n'a pas été supprimée";
        header('location: admin-images.php');
        exit();
    }
