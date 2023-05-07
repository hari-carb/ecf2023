<?php
require __DIR__ .'/../db.php';
// Vérifier que l'email n'est pas déjà utilisé par un autre compte
if (!empty($_POST))
{
    $verifEmail = $pdo->prepare('SELECT id FROM users WHERE email = ?');
    $verifEmail->execute(array($_POST['email']));
    $email = $verifEmail->fetch();
}
