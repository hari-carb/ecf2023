<?php
require __DIR__ .'/../db.php';
// Insère le plat
$course = $pdo->prepare("INSERT INTO plats (title, description, price) VALUES(?, ?, ?)");
$course->execute(array($_POST['title'], $_POST['description'], $_POST['price']));
// Insère catégorie Entrée, plat, fromage, dessert
$lastIdPlat = $pdo->lastInsertId();
$cat1 = $pdo->prepare("INSERT INTO plats_categories (plats_id, category1_id) VALUES(?, ?)");
$cat1->execute(array($lastIdPlat, $_POST['cat1']));
// Insère les autres catégories
$categories2 = (is_array($_POST['cat2'])) ? $_POST['cat2'] : [];
foreach ($categories2 as $category)
{
    $cat2 = $pdo->prepare("INSERT INTO plats_categories (plats_id, category2_id) VALUES(?, ?)");
    $cat2->execute(array($lastIdPlat, $category));
}
//Insère dans le(s) menu(s)
$menus = (is_array($_POST['menus'])) ? $_POST['menus'] : [];
foreach ($menus as $menu)
{
    $cat2 = $pdo->prepare("INSERT INTO plats_menus (plats_id, menus_id) VALUES(?, ?)");
    $cat2->execute(array($lastIdPlat, $menu));
}