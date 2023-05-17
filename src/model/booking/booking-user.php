<?php
require __DIR__ .'/../db.php';
$userId = $_SESSION['authUser']->id;
$updateUser = $pdo->prepare("UPDATE users SET firstname = ?, username = ?, email = ?, tel = ?, allergies = ? WHERE id = '$userId'");
$updateUser->execute(array($_POST['firstname'], $_POST['username'], $_POST['email'], $_POST['tel'], $_POST['allergies']));