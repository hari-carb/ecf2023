<?php
session_start();
  // Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
if (!isset($_SESSION['authAdmin']))
{
  $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à l'espace administration.";
  header("Location: ../login.php");
  exit();
  }

function admin()
{
    require 'templates/admin.php';
}