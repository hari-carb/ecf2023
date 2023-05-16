<?php
require __DIR__ .'/../db.php';

$getMenuId = $_GET['id'];
$menus = $pdo->prepare('SELECT * FROM menus WHERE id = ?');
$menus->execute(array($getMenuId));
$menu=$menus->fetch();

$updateMenu = $pdo->prepare("UPDATE menus SET name = ?, price= ? WHERE id = '$getMenuId'");
$updateMenu->execute(array($_POST['name'], $_POST['price']));
