<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
function logout()
{
    if (isset($_SESSION['authUser']))
    {
        unset($_SESSION['authUser']);
        $_SESSION['flash']['success'] = 'Vous êtes déconnecté(e) de votre espace client.';
        session_destroy();
        header('Location: login.php');
        exit();
    }
    if (isset($_SESSION['authAdmin']))
    {
        unset($_SESSION['authAdmin']);
        $_SESSION['flash']['success'] = 'Vous êtes déconnecté(e) de votre espace administration.';
        session_destroy();
        header('Location: login.php');
        exit();
    }
}