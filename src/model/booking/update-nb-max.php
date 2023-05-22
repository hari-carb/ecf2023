<?php

require __DIR__ .'/../db.php';
$updateNbMax = $pdo->prepare("UPDATE maxBooking SET nbMax= ?  WHERE id ='1'");
$updateNbMax->execute(array($_POST['nb-max']));
