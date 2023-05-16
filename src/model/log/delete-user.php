<?php
require __DIR__ .'/../db.php';
$deleteUser = $pdo->prepare('DELETE FROM users WHERE id = ?');
$deleteUser->execute(array($getIdUser));