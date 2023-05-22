<?php
require __DIR__ .'/../db.php';

$scheduleOpen = $pdo->prepare("SELECT * FROM schedule WHERE opening='ouvert'");
$scheduleOpen->execute();

$scheduleClose = $pdo->prepare("SELECT * FROM schedule WHERE opening='fermé'");
$scheduleClose->execute();
$scheC=$scheduleClose->fetch();