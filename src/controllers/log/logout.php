<?php
session_start();
function logout()
{
    unset($_SESSION['authUser']);
    unset($_SESSION['authAdmin']);
    $_SESSION['flash']['success'] = 'Vous êtes déconnecté(e) avec succès.';
    header('Location: login.php');
}