<?php

require __DIR__ .'/../db.php';

$getIdMenu = $_GET['id'];
$coursesByMenuId = $pdo->prepare('SELECT * FROM menu_par_plats_categories WHERE menu_id = ?');
$coursesByMenuId->execute(array($getIdMenu));
$menuName = $coursesByMenuId->fetch();