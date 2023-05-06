<?php
require "src/model/db.php";
//login user
$userLogin = $pdo->prepare("SELECT * FROM users WHERE email = :email AND type= 'user'");
$userLogin->execute(['email' => $_POST['email']]);
$userClient = $userLogin->fetch();
//login admin
$adminLogin = $pdo->prepare("SELECT * FROM users WHERE email = :email AND type= 'admin'");
$adminLogin->execute(['email' => $_POST['email']]);
$userAdmin = $adminLogin->fetch();


