<?php
require __DIR__ .'/../db.php';
// Insère le plat
$course = $pdo->prepare("INSERT INTO plats (title, description, price) VALUES(?, ?, ?)");
$course->execute(array($_POST['title'], $_POST['description'], $_POST['price']));
// Insère catégorie Entrée, plat, fromage, dessert
$lastIdPlat = $pdo->lastInsertId();
$cat1 = $pdo->prepare("INSERT INTO plats_categories (plats_id, categories_id) VALUES(?, ?)");
$cat1->execute(array($lastIdPlat, $_POST['course']));
// Insère les autres catégories
$categories = (is_array($_POST['categories'])) ? $_POST['categories'] : [];
foreach ($categories as $category)
{
    $cat2 = $pdo->prepare("INSERT INTO plats_categories (plats_id, categories_id) VALUES(?, ?)");
    $cat2->execute(array($lastIdPlat, $category));
}
//Insère dans le(s) menu(s)
$menus = (is_array($_POST['menus'])) ? $_POST['menus'] : [];
foreach ($menus as $menu)
{
    $cat2 = $pdo->prepare("INSERT INTO plats_menus (plats_id, menus_id) VALUES(?, ?)");
    $cat2->execute(array($lastIdPlat, $menu));
}