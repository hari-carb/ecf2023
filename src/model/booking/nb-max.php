<?php
require __DIR__ .'/../db.php';
$selectNbMax = $pdo->prepare("SELECT nbMax FROM maxBooking WHERE id='1'");
$selectNbMax->execute();
$nbMax = $selectNbMax->fetch();