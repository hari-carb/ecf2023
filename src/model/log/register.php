<?php
require __DIR__ .'/../db.php';

if ($_SESSION['authAdmin'])
{
    $registerUser = $pdo->prepare("INSERT INTO users(firstname, username, type, password, email, tel, nbpers, allergies) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $registerUser->execute(array($_POST['firstname'], $_POST['username'],  $_POST['type'], $password, $_POST['email'], $_POST['tel'], $_POST['nbpers'], $_POST['allergies']));
}else
{
    $registerUser = $pdo->prepare("INSERT INTO users(firstname, username, type, password, email, tel, nbpers, allergies) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $type = 'user';
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $registerUser->execute(array($_POST['firstname'], $_POST['username'], $type, $password, $_POST['email'], $_POST['tel'], $_POST['nbpers'], $_POST['allergies']));
}


