<?php
require __DIR__ .'/../db.php';$getId = $_GET['id'];

$users = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$users->execute(array($getId));
if ($users->rowCount() > 0)
{
    $deleteUser = $pdo->prepare('DELETE FROM users WHERE id = ?');
    $deleteUser->execute(array($getId));
    $_SESSION['flash']['success'] = 'L\'utilisateur a bien été supprimé';
    header('Location: admin-users.php');
}else
{
        $_SESSION['flash']['danger'] = 'Aucun membre n\'a été trouvé';
}