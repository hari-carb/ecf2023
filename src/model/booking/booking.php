<?php
require __DIR__ .'/../db.php';

$insertResa = $pdo->prepare("INSERT INTO booking (date, nbpers, time, name, firstname, email, allergies, tel) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
$insertResa->execute(array($_POST['datepicker'], $_POST['nbpers'], $_POST['time'],$_POST['username'], $_POST['firstname'], $_POST['email'], $_POST['allergies'], $_POST['tel']));