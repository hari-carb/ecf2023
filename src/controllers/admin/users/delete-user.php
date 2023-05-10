<?php 
session_start();

if (isset($_GET['id']) && !empty($_GET['id']))
{
    require __DIR__ .'/../../../model/log/getIdUser.php';
    if ($users->rowCount() > 0)
    {
        require __DIR__ .'/../../../model/log/delete-user.php';
        $_SESSION['flash']['success'] = 'L\'utilisateur a bien été supprimé';
        header('Location: admin-users.php');
    }else
    {
            $_SESSION['flash']['danger'] = 'Aucun membre n\'a été trouvé';
    }
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
}