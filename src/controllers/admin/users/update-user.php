<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
 require_once __DIR__ .'/../../log/display.php';
if (isset($_GET['id']) && !empty($_GET['id']))
{
    require_once __DIR__ .'/../../../model/log/getIdUser.php';
    if (!empty($_POST))
    {
        require_once __DIR__ .'/../../log/check-post-errors.php';
        $errors = checkUpdateErrors();
        if (empty($errors))
        {
            require_once __DIR__ .'/../../../model/log/update-user.php';
            $_SESSION['flash']['success'] = 'L\'utilisateur a bien été modifié';
            header('Location: admin-users.php');
            exit();
        }else
        {
            $_SESSION['flash']['danger'] = 'l\'utilisateur n\'a pas été modifié';
            header('Location: admin-users.php');
            exit();
        }
    }
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
    header('Location: admin-users.php');
    exit();
}

require __DIR__ .'/../../../../templates/admin/users/update-user.php';