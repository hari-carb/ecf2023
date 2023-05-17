<?php
function login()
{
    if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password']))
    {
      require_once __DIR__ .'/../../model/log/login.php';
      //Vérification conformité email/bdd
      if (password_verify($_POST['password'], $userClient->password) && $_POST['email'] == $userClient->email)
      {
          //Init session user
          $_SESSION['authUser'] = $userClient;
          $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté(e).';
          header('location: users.php');
          exit();
      }elseif (password_verify($_POST['password'], $userAdmin->password) && $_POST['email'] == $userAdmin->email)
      {
          //Init session admin
          $_SESSION['authAdmin'] = $userAdmin;
          $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté(e) à votre espace administration.';
          header('location: admin.php');
          exit();
      }else
      {
          $_SESSION['flash']['danger'] = 'Email ou mot de passe incorrect';
          exit();
      }
    }
    require __DIR__ .'/../../../templates/log/login.php';
}