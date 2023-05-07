<?php

function displayMenus()
{
    require __DIR__ .'/../../model/db.php';
    $menus = 'SELECT * FROM menus';
    foreach ($pdo->query($menus) as $menu)
    {
        $displayMenus = print '<div><h2>'. $menu->name .'</h2></div>
        <div><button><a href="menu.php?id='. $menu->id .'"> Consulter</a></button></div>';
    }
    return $displayMenus;
}