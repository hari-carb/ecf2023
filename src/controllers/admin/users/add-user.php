<?php
require __DIR__ .'/../../log/check-post-errors.php';

if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        require_once __DIR__ .'/../../log/check-post-errors.php';
        $errors = checkPostErrors();
        //Validation inscription
        if (empty($errors))
        {
            require_once __DIR__ .'/../../../model/log/register.php';
            $_SESSION['flash']['success'] = 'L\'utilisateur a bien été modifié';
            header('Location: admin-users.php');
        }
    }
require __DIR__ .'/../../../../templates/admin/users/add-user.php';
