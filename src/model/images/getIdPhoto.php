<?php
require __DIR__ .'/../db.php';
$getIdPhoto = $_GET['id'];
$photos = $pdo->prepare('SELECT * FROM photos WHERE id = ?');
$photos->execute(array($getIdPhoto));