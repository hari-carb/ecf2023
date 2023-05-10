<?php 
require __DIR__ .'/../db.php';

$getIdUser = $_GET['id'];
$users = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$users->execute(array($getIdUser));
$user = $users->fetch();