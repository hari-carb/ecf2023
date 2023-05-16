<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
function checkPostName($name)
{
    if (empty($name) || !preg_match('/^[a-zA-ZÀ-ú\s_]+$/', $name))
    {
       return false;
    }
    return true;
}
function checkPostEmail($email)
{
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
       return false;
    }
    return true;
}
function checkPasswordFormat($password)
{
    $maj = preg_match('@[A-Z]@', $password);
	$min = preg_match('@[a-z]@', $password);
	$number = preg_match('@[0-9]@', $password);
    if (empty($password) || $password != $_POST['password_confirm']
    || !$min || !$maj || !$number || strlen($password) < 8)
    {
        return false;
    }
    return true;
}
function checkPostTel($tel)
{
    if (empty($tel) || !preg_match('/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/', $tel))
    {
       return false;
    }
    return true;
}
function checkPostAllergies($allergies)
{
    if (!preg_match('/^[0-9a-zA-ZÀ-ú\s_]+$/', $allergies))
    {
       return false;
    }
    return true;
}
function checkPostErrors()
{
    if (!empty($_POST))
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
        return $errors;
    }
}

function checkUpdateErrors()
{
    if (!empty($_POST))
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
        }
        if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']
        || !checkPasswordFormat($_POST['password']))
        {
            $errors['password'] = "Vous devez entrer un mot de passe valide.
            Il doit comporter au moins 8 caratères, une majuscule, une minuscule et un chiffre
            et ne doit pas être différent du mot de passe de confirmation";
        }
        return $errors;
    }
}
function checkBookingErrors()
{
    if (!empty($_POST))
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
        if (!checkPostEmail($_POST['email']))
        {
            $errors['email'] = "Votre email n'est pas valide";
        }
        if (!checkPostTel($_POST['tel']))
        {
            $errors['tel'] = "Votre téléphone n'est pas valide";
        }
        if (!checkPostAllergies($_POST['allergies']))
        {
            $errors['allergies'] = "Seuls les lettres et les espaces sont autorisés dans le champ Allergies.";
        }
    }
    return $errors;
}