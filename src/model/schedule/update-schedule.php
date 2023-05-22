<?php
require __DIR__ .'/../db.php';

$updateSchedule = $pdo->prepare("UPDATE schedule SET lunch = ?, diner = ?, opening= ? WHERE id = '$getScheduleId'");
$updateSchedule->execute(array( $_POST['lunch'], $_POST['diner'], $_POST['opening']));