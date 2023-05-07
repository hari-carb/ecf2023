<?php
session_start();
require __DIR__ .'/check-posts.php';

function checkPostErrors()
{
    $errors = array();
    if (!checkPostName($_POST['username']))
    {
        $errors['username'] = "Seuls les lettres et les espaces sont autorisés dans le champ Nom.";
    }
    if (!checkPostName($_POST['firstname']))
    {
        $errors['firstname'] = "Seuls les lettres et les espaces sont autorisés dans le champ Prénom.";
    }
    if (!checkPostTel($_POST['tel']))
    {
        $errors['tel'] = "Votre téléphone n'est pas valide";
    }
    if (!checkPostEmail($_POST['email']))
    {
        $errors['email'] = "Votre email n'est pas valide";
    }else
    {
        require  __DIR__ .'/../../model/log/register-email.php';
        if ($email)
        {
        $errors['email'] = 'Cet email est déjà utilisé par un autre compte.';
        }
    }
    if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']
    || !checkPasswordFormat($_POST['password']))
    {
        $errors['password'] = "Vous devez entrer un mot de passe valide.
        Il doit comporter au moins 8 caratères, une majuscule, une minuscule et un chiffre
        et ne doit pas être différent du mot de passe de confirmation";
    }
    require __DIR__ .'/display-errors.php';
    if (!empty($errors))
    {
        print '<div><p>Vous n\'avez pas rempli le formulaire correctement.</p><ul>'.
        displayErrors($errors). '</ul></div>';
    }
    if (empty($errors))
    {
        require_once __DIR__ .'/../../model/log/register.php';
        $_SESSION['flash']['success'] = 'Votre inscription a bien été validée';
        if ($_SESSION['authAdmin'])
        {
            header('Location: admin-users.php');
        }else
        {
            header('Location: login.php');
        }
    }
}

