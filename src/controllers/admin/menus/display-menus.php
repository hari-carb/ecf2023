<?php
function adminDisplayMenusByName($menuName)
{
    require __DIR__ .'/../../../model/db.php';
    $menus = "SELECT id, name, price FROM menus WHERE name='$menuName'";
    foreach ($pdo->query($menus) as $menu)
    {
        $displayMenu = print
        '<tr>
            <td colspan="2"><h3>'. $menu->name. '</h3></td>
            <td><h3>'. $menu->price. ' €</h3></td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="add-menu.php?id=' .$menu->id. '">Ajouter un plat</a></button></td>';
    }
    return $displayMenu;
}

function adminDisplayMenu($menu)
{
    require __DIR__ .'/../../../model/db.php';
    $courses = "SELECT menu_id, plats_id, title, description, category1_type FROM menu_plats_cat1 WHERE menu_name='$menu'";
    foreach ($pdo->query($courses) as $course)
    {
        $displayCourse =print
        '<tr>
            <td>'. $course->category1_type. '</td>
            <td>'. $course->title. '</td>
            <td>'. $course->description. '</td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="delete-menu.php?menuId=' .$course->menu_id. '&platId=' .$course->plats_id. '">Supprimer du menu</a></button></td>

        </tr>';
    }
    return $displayCourse;
}