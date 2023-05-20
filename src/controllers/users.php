<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
// Vérifie si l'utilisateur est un client, sinon redirection vers la page de connexion
if (!isset($_SESSION['authUser']))
{
    $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à l'espace client.";
    header("Location: login.php");
    exit();
}

function users()
{
  
    require __DIR__ .'/../../templates/users.php';
    require __DIR__ .'/admin/display-admin.php';
    require __DIR__ .'/users/display.php';
    $today = currentDate();
    $nextYearDate = dateNextYear();
    $pastMonthDate = datePastMonth();
    $pastYearDate = datePastYear();
    if (!empty($_POST))
    {
        switch ($_POST['selectBooking'])
        {
        case 1: displayUserBooking($today, $nextYearDate);
        break;
        case 2: displayUserBooking($pastMonthDate, $today);
        break;
        case 3: displayUserBooking($pastYearDate, $today);
        break;
        default: "Pas de période sélectionnée";
      }
    }else
    {
      displayUserBooking($today, $nextYearDate);
    }
}