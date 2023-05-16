<?php
    require __DIR__ .'/../display-admin.php';

if (!empty($_POST))
{
    require_once __DIR__ .'/../display-admin.php';
    if (isset($_POST['menuId']))
    {
        if (isset($_POST['addCourseMenu']) && !empty($_POST['addCourseMenu']))
        {
            require __DIR__ .'/../../../model/menus-carte/add-course-menu.php';
            $_SESSION['flash']['success'] = 'Le plat a bien été ajouté au menu';
            header('Location: admin-menus.php');
            exit();
        }else
        {
            $_SESSION['flash']['danger'] = 'L\'identifiant du plat n\'a pas été récupéré';
        }
    }else
    {
        $_SESSION['flash']['danger'] = 'L\'identifiant du menu n\'a pas été récupéré';
    }
}
require __DIR__ .'/../../../../templates/admin/menus/admin-menus.php';