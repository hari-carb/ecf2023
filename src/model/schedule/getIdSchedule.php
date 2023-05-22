<?php
require __DIR__ .'/../db.php';

$getScheduleId = $_GET['id'];
$schedule = $pdo->prepare("SELECT * FROM schedule WHERE id= ?");
$schedule->execute(array($getScheduleId));
$sche=$schedule->fetch();