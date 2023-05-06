<?php

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