<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
function displayUsers($users)
{
    require_once __DIR__ .'/../../model/db.php';
    foreach ($pdo->query($users) as $user)
    {
        $text = print '<input type="radio" name="update-user" id="update-user" value/>' . $user->username .' '. $user->email;
    }
    return $text;
}
// pour register et login
function insertDisplayErrors()
{
    require_once __DIR__ .'/check-post-errors.php';
    $checkErrors = checkPostErrors();
    //Afficher les erreurs
    if (!empty($checkErrors))
    {
        print '<ul>';
        foreach ($checkErrors as $error)
        {
            print '<li>' .$error. '</li>';
        }
        print '</ul>';
     }
}