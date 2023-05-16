<?php
require __DIR__ .'/../db.php';

$getMenuId = $_GET['id'];
$menus = $pdo->prepare('SELECT * FROM menus WHERE id = ?');
$menus->execute(array($getMenuId));
$menu=$menus->fetch();