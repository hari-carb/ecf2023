<<?php
require __DIR__ .'/../db.php';
$userId = $_SESSION['authUser']->id;
$updateUser = $pdo->prepare("UPDATE users SET firstname = ?, username = ?, type = ?, password = ?, email = ?, tel = ? nbpers = ? allergies = ? WHERE id = '$userId'");
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$updateUser->execute(array($_POST['firstname'], $_POST['username'], $_POST['type'], $password, $_POST['email'], $_POST['tel'], $_POST['nbpers'], $_POST['allergies']));