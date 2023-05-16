<?php
// Vérifie si l'utilisateur est un administrateur, sinon redirection vers la page de connexion
if (!isset($_SESSION['authAdmin']))
{
  $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à l'espace administration.";
  header("Location: login.php");
  exit();
}
function admin()
{
  require __DIR__ .'/admin/display-admin.php';
  require __DIR__ .'/../../templates/admin.php';
}