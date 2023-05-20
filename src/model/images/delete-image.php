<?php
require __DIR__ .'/../db.php';
$getIdPhoto = $_GET['id'];
$deletePhoto = $pdo->prepare('DELETE FROM photos WHERE id = ?');
$deletePhoto->execute(array($getIdPhoto));