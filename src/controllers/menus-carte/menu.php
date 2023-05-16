<?php
function menu()
{
    // Affiche les plats d'un menu
    require __DIR__ .'/display.php';
    require __DIR__ .'/../../../templates/menus-carte/menu.php';
    if (isset($_GET['id']) && !empty($_GET['id']))
    {
        require __DIR__ .'/../../model/menus-carte/menu.php';
        print '<h2>Menu '. $menuName->menu .'</h2>';
        displayCoursesByMenu($getIdMenu);
    }else
    {
        $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
    }
}