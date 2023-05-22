<?php

function menu()
{
    if (isset($_GET['id']) && !empty($_GET['id']))
    {
        require __DIR__ .'/display.php';
    }else
    {
        $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
    }
    require __DIR__ .'/../../../templates/menus-carte/menu.php';
}