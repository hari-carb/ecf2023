<?php
require __DIR__ .'/display-courses-menu.php';

function menu()
{
    require __DIR__ .'/display-menus.php';
    require __DIR__ .'/../../../templates/menus-carte/menu.php';
    if (isset($_GET['id']) && !empty($_GET['id']))
    {
        require __DIR__ .'/../../model/menus-carte/menu.php';
        print '<h3>Menu '. $menuName->menu .'</h3>';
        displayCoursesByMenu($getIdMenu);
    }else
    {
        $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
    }
}