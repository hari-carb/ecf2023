<?php
//dans menu.php
function displayCoursesByMenu($menuId)
{
    require __DIR__ .'/../../model/db.php';
    $courses = "SELECT title, description FROM menu_par_plats_categories WHERE menu_id='$menuId'";
    foreach ($pdo->query($courses) as $course)
    {
        $displayCourseByMenu = print '<h4>' . $course->title . '</h4>
        <p>' . $course->description . '</p>';
    }
    return $displayCourseByMenu;
}
//dans carte.php
function displayCoursesByCategories($type)
{
    require __DIR__ .'/../../model/db.php';
    $coursesCat = "SELECT title, description, price FROM plats_par_categories WHERE type= '$type'";
    print '<h3>'. $type .'s</h3>';
    foreach ($pdo->query($coursesCat) as $course)
    {
        $displayCourseCat = print '<h4>' . $course->title . '</h4>
        <p>' . $course->description . '</p>
        <p>' . $course->price . '</p>';
    }
    return $displayCourseCat;
}

