<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
   session_start();
}
require_once __DIR__ .'/../../log/display.php';
if (isset($_GET['id']) && !empty($_GET['id']))
{
    require_once __DIR__ .'/../../../model/menus-carte/getIdCourse.php';

    if (!empty($_POST))
    {
        require_once __DIR__ .'/../display-admin.php';
        $errors = array();
    if (!checkPostPrice($_POST['price']))
    {
        $errors['price'] = "Vous devez saisir un nombre entier dans le champ Prix";
    }
        if (empty($errors))
        {
            require_once __DIR__ .'/../../../model/menus-carte/update-course.php';
            $_SESSION['flash']['success'] = 'Le plat a bien été modifié';
            header('location: admin-courses.php');
            exit();
        }else
        {
            $_SESSION['flash']['danger'] = 'le plat n\'a pas été modifié';
            header('location: admin-courses.php');
            exit();
        }
    }
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
    header('location: admin-courses.php');
    exit();
}
require __DIR__ .'/../../../../templates/admin/courses/update-course.php';