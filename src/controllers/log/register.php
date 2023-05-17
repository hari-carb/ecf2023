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
            if ($registerUser)
            {    // si la requête a fonctionné
                $registerUser = null;
                if ($_SESSION['authAdmin'])
                {
                    //Si l'inscription est validée depuis l'espace admin
                    $_SESSION['flash']['success'] = 'L\'inscription a bien été validée';
                    header('Location: admin-users.php');
                    exit();
                }else
                {
                    $_SESSION['flash']['success'] = 'Votre inscription a bien été validée';
                    header('Location: login.php');
                    exit();
                }
             }else {
                    $_SESSION['flash']['danger'] = 'Un problème s\'est produit. L\'inscription n\'a pas été validée';
                    exit();
            }
        }
    }
    require __DIR__ .'/../../../templates/log/register.php';
}