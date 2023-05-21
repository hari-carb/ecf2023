<?php
require __DIR__ .'/../db.php';

$getDayId = $_GET['id'];
$schedule = $pdo->prepare('SELECT * FROM schedule WHERE id = ?');
$schedule->execute(array($getDayId));
$sche=$schedule->fetch();