<?php
function register()
{
    if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        require_once __DIR__ .'/check-post-errors.php';
        $errors = checkPostErrors();
        //Validation inscription
        if (empty($errors))
        {
            require_once __DIR__ .'/../../model/log/register.php';
            $_SESSION['flash']['success'] = 'Votre inscription a bien été validée';
            if ($_SESSION['authAdmin'])
            {
                //Si l'inscription est validée depuis l'espace admin
                header('Location: admin-users.php');
            }else
            {
                header('Location: login.php');
            }
        }
    }
    require __DIR__ .'/../../../templates/log/register.php';
}