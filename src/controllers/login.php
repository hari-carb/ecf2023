<?php
function login()
{
    if(!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password']))
    {
      require_once 'src/model//users/login.php';
      //Vérification conformité email/bdd
      if (password_verify($_POST['password'], $userClient->password))
      {
        //Init session user
        session_start();
        $_SESSION['authUser'] = $userClient;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté(e).';
        header('location: index.php');
        exit();
      }elseif (password_verify($_POST['password'], $userAdmin->password))
      {
        //Init session admin
        session_start();
        $_SESSION['authAdmin'] = $userAdmin;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté(e) à votre espace administration.';
        header('location: admin.php');
        exit();
      }else
      {
        $_SESSION['flash']['danger'] = 'Mot de passe incorrect';
      }
    }
    require 'templates/login.php';
}