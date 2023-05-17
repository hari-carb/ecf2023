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
function displayPostErrors()
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
function displayUpdateErrors()

{
    require_once __DIR__ .'/check-post-errors.php';
    $checkErrors = checkUpdateErrors();
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
function displayBookingErrors()

{
    require_once __DIR__ .'/check-post-errors.php';
    $checkErrors = checkBookingErrors();
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
// checked le button radio / à la bdd
function isChecked($dbValue, $htmlValue)
{
    if ($dbValue == $htmlValue)
    {
      echo 'checked="checked"';
    }else
    {
      echo '';
    }
  }
  // checked le button radio / à la bdd
function isSelected($dbValue, $htmlValue)
{
    if ($dbValue == $htmlValue)
    {
      echo 'selected="selected"';
    }else
    {
      echo '';
    }
  }