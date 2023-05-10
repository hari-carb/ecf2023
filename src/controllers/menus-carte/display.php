<?php
//dans menu.php
function displayCoursesByMenu($menuId)
{
    require __DIR__ .'/../../model/db.php';
    $courses = "SELECT title, description FROM menu_par_plats_categories WHERE menu_id='$menuId'";
    foreach ($pdo->query($courses) as $course)
    {
        $displayCourseByMenu = print '<h3>' . $course->title . '</h3>
        <p class="courses">' . $course->description . '</p>';
    }
    return $displayCourseByMenu;
}
//dans carte.php, affiche les plats par categories epfd
function displayCoursesByCat1($type)
{
    require __DIR__ .'/../../model/db.php';
    $coursesCat = "SELECT title, description, price FROM plats_by_cat1 WHERE c1_type = '$type'";
    print '
    <h2>'. $type .'s</h2>';
    foreach ($pdo->query($coursesCat) as $course)
    {
        $displayCourseCat = print '<h3>' . $course->title . '</h3>
        <p class="courses">' . $course->description . '</p>
        <p class="courses">' . $course->price . '€</p>';
    }
        return $displayCourseCat;
}
//dans carte.php, affiche les plats par categories div
function displayCoursesByCat2($type)
{
    require __DIR__ .'/../../model/db.php';
    $coursesCat = "SELECT title, description, price FROM plats_by_cat2 WHERE c2_type = '$type'";
    print '
    <h2>'. $type .'s</h2>';
    foreach ($pdo->query($coursesCat) as $course)
    {
        $displayCourseCat = print '<h3>' . $course->title . '</h3>
        <p class="courses">' . $course->description . '</p>
        <p class="courses">' . $course->price . '€</p>';
    }
        return $displayCourseCat;
}
function displayCategories()
{
    require __DIR__ .'/../../model/db.php';
    $categories = "SELECT type FROM categories";
    foreach ($pdo->query($categories) as $category)
    {
        $displayCat = print '<option value="'. $category->type .'">'. $category->type .'</option>';
    }
    return $displayCat;
}
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