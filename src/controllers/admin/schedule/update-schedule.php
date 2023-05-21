<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
   session_start();
}
require __DIR__ .'/../display-admin.php';
require __DIR__ .'/../../log/display.php';
require __DIR__ .'/../../log/check-post-errors.php';
if (isset($_GET['id']) && !empty($_GET['id']))
{
    require_once __DIR__ .'/../../../model/schedule/getIdSchedule.php';
    if (!empty($_POST))
    {
        checkScheduleErrors();
        if (empty($errors))
        {
        //Insère les posts
            require_once __DIR__ .'/../../../model/schedule/update-schedule.php';
            $_SESSION['flash']['success'] = "L\'horaire a bien été modifié.";
            header('Location: admin-schedule.php');
        }else
        {
            $_SESSION['flash']['danger'] = 'L\'horaire n\'a pas été modifié';
        }
    }
}else
{
    $_SESSION['flash']['danger'] = 'L\'identifiant n\'a pas été récupéré';
}
require __DIR__ .'/../../../../templates/admin/schedule/update-schedule.php';
