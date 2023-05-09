<?php
/*menus-carte.php : affiche nom du menu, image, 
bouton link to la liste de plats du menu sélectionné*/
function displayMenus()
{
    require __DIR__ .'/../../model/db.php';
    $menus = 'SELECT * FROM menus';
    foreach ($pdo->query($menus) as $menu)
    {
        $displayMenus = print '
        <h2>'. $menu->name .'</h2>
        <button class="submit">
            <a href="menu.php?id='. $menu->id .'"> Consulter</a>
        </button>';
    }
    return $displayMenus;
}