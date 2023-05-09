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