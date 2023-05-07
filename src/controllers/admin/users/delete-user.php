<?php 
session_start();

if (isset($_GET['id']) && !empty($_GET['id']))
{
    require __DIR__ .'/../../../model/log/delete-user.php';
    
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
}