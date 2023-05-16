<?php
require __DIR__ .'/../db.php';
// Insère le plat
$course = $pdo->prepare("INSERT INTO plats (title, description, price) VALUES(?, ?, ?)");
$course->execute(array($_POST['title'], $_POST['description'], $_POST['price']));
// Insère catégories
$lastIdPlat = $pdo->lastInsertId();
$cat2 = $_POST['cat2'];
if (empty($cat2))
{
  $cat2 = NULL;
}
$categories = $pdo->prepare("INSERT INTO plats_categories (plats_id, c1_id, c2_id) VALUES(?, ?, ?)");
$categories->execute(array($lastIdPlat, $_POST['cat1'], $cat2));
