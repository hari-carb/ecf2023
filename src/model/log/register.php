<?php
require __DIR__ .'/../db.php';

if (!empty($_POST))
{
    $registerUser = $pdo->prepare("INSERT INTO users(firstname, username, type, password, email, tel) VALUES(?, ?, ?, ?, ?, ?)");
    $type = 'user';
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $registerUser->execute(array($_POST['firstname'], $_POST['username'], $type, $password, $_POST['email'], $_POST['tel']));
}