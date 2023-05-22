<?php
//Vérification qu'une session n'est pas déjà ouverte
if (session_status() == PHP_SESSION_NONE)
{
   session_start();
}
require __DIR__ .'/../display-admin.php';
require __DIR__ .'/../../log/display.php';
if (isset($_GET['id']) && !empty($_GET['id']))
{
    require_once __DIR__ .'/../../../model/schedule/getIdSchedule.php';
    if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        require __DIR__ .'/../../log/check-post-errors.php';
        $errors = checkScheduleErrors();
         //Validation modification des horaires
        if (empty($errors))
        {
            require_once __DIR__ .'/../../../model/schedule/update-schedule.php';
            // si la requête a fonctionné
            if ($updateSchedule)
            {
                $updateSchedule = null;
                $_SESSION['flash']['success'] = "L'horaire a bien été modifié.";
                header('Location: admin-schedule.php');
                exit();
            }else
            {
                $_SESSION['flash']['danger'] = "Un problème s'est produit. L'horaire n'a pas été modifié.";
                header('Location: update-schedule.php');
                exit();
            }
        }
    }
}else
{
    $_SESSION['flash']['danger'] = "L'identifiant n'a pas été récupéré";
    header('Location: admin-schedule.php');
    exit();
}
require __DIR__ .'/../../../../templates/admin/schedule/update-schedule.php';
