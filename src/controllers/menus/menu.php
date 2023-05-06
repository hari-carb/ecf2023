<?php
require 'display-courses-menu.php';

function menu()
{
    require 'templates/menus/menu.php';
    if (isset($_GET['id']) && !empty($_GET['id']))
    {
        require 'src/model/menus/menu.php';
        print '<h3>Menu '. $menuName->menu .'</h3>';
        displayCoursesByMenu($getIdMenu);
    }else
    {
        $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
    }
}