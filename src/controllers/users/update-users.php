<?php

require_once __DIR__ .'/../log/display.php'; //function isChecked
if (isset($_SESSION['authUser']))
{
    if (!empty($_POST))
    {
        require_once __DIR__ .'/../log/check-post-errors.php';
        $errors = checkUpdateErrors();
        if (empty($errors))
        {
            require_once __DIR__ .'/../../../model/users/update-user.php';
            $_SESSION['flash']['success'] = 'Votre compte a bien été modifié';
            header('Location: users.php');
            exit();
        }else
        {
            $_SESSION['flash']['danger'] = 'Votre compte n\'a pas été modifié';
            header('Location: users.php');
            exit();
        }
    }
}else
{
    $_SESSION['flash']['danger'] = 'Vous n\'êtes pas connecté à votre espace client';
    header('Location: login.php');
    exit();
}

require __DIR__ .'/../../../templates/admin/users/update-user.php';