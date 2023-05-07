<?php

function adminDisplayCoursesByCategories($type)
{
    require __DIR__ .'/../../../model/db.php';
    $courses = "SELECT title, description, price, p_id, type FROM plats_par_cat_ent_plat_dess WHERE type= '$type'";
    print '<tr><td colspan="6"><h4>'. $type. 's</h4></td></tr>';
    foreach ($pdo->query($courses) as $course)
    {
        $displayCourse = print '<tr>
            <td>'. $course->type. '</td>
            <td>'. $course->title. '</td>
            <td>'. $course->description. '</td>
            <td>' .$course->price. '</td>
            <td><button><a href="update-course.php?id='. $course->p_id. '">Modifier</a></button></td>
            <td><button><a href="delete-course.php?id=' .$course->p_id. '">Supprimer</a></button></td>
        </tr>';
    }
    return $displayCourse;
}

function checkPostPrice($price)
{
	$number = preg_match('@[0-9]@', $price);
    if (!$number)
    {
        return false;
    }
    return true;
}