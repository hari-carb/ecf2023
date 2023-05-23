<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
// Vérifie si l'utilisateur est un client, sinon redirection vers la page de connexion
if (!isset($_SESSION['authUser']))
{
    $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à l'espace client.";
    header("Location: login.php");
    exit();
}
function users()
{
    require_once __DIR__ .'/log/display.php'; //function isChecked
    if (isset($_SESSION['authUser']))
    {
        if (!empty($_POST))
        {
            require_once __DIR__ .'/log/check-post-errors.php';
            $errors = checkUpdateErrors();
            if (empty($errors))
            {
                require_once __DIR__ .'/../model/users/update-users.php';
                $_SESSION['flash']['success'] = 'Votre compte a bien été modifié';
                header('location: users.php');
                exit();
            }else
            {
                $_SESSION['flash']['danger'] = "Votre compte n'a pas été modifié";
                header('location: users.php');
                exit();
            }
        }
    }else
    {
        $_SESSION['flash']['danger'] = "Vous n'êtes pas connecté à votre espace client";
        header('location: users.php');
        exit();
    }
    
    require __DIR__ .'/../../templates/update-users.php';
}