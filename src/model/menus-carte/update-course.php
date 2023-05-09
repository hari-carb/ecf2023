<?php
require __DIR__ .'/../db.php';
$getCourseId = $_GET['id'];
$courses = $pdo->prepare('SELECT * FROM plats WHERE id = ?');
$courses->execute(array($getCourseId));
$course=$courses->fetch();

$updateCourse = $pdo->prepare("UPDATE plats SET title = ?, description = ?, price= ? WHERE id = '$getCourseId'");
$updateCourse->execute(array($_POST['title'], $_POST['description'], $_POST['price']));

$cat1 = $pdo->prepare("UPDATE plats_categories SET category1_id = ? WHERE plats_id = '$getCourseId'");
$cat1->execute(array($_POST['cat1']));

$categories = (is_array($_POST['cat2'])) ? $_POST['cat2'] : [];
    foreach ($categories as $category)
    {
        $cat2 = $pdo->prepare("UPDATE plats_categories SET category2_id = ? WHERE plats_id = '$getCourseId'");
        $cat2->execute(array($category));
    }

$menus = (is_array($_POST['menus'])) ? $_POST['menus'] : [];
foreach ($menus as $menu)
{
    $cat3 = $pdo->prepare("UPDATE plats_menus SET plats_id = ?, menus_id = ?");
    $cat3->execute(array($getCourseId, $menu));
}