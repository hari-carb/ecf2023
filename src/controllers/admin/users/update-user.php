<?php 
session_start();

require __DIR__ .'/../../log/check-update-errors.php';

if (isset($_GET['id']) && !empty($_GET['id']))
{
    require_once __DIR__ .'/../../../model/log/getIdUser.php';

    if (!empty($_POST))
    {
        checkUpdateErrors();
        if (empty($errors))
        {
            require_once __DIR__ .'/../../../model/log/update-user.php';
        }else
        {
            $_SESSION['flash']['danger'] = 'l\'utilisateur n\'a pas été modifié';

        }
    }
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
}

require __DIR__ .'/../../../../templates/admin/users/update-user.php';


