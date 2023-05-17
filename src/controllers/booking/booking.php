<?php
function booking()
{
    if (!empty($_POST))
    {
        require_once __DIR__ .'/../log/check-post-errors.php';
        //Vérification et affichage des erreurs de saisie
        $errors = checkBookingErrors();
        //Validation réservation
        if (empty($errors))
        {
            require_once __DIR__ .'/../../model/booking/booking.php';
            $_SESSION['flash']['success'] = 'Votre réservation a bien été prise en compte';
            header('location: index.php');
            exit();
        }else
        {
            $_SESSION['flash']['danger'] = 'Erreurs de saisie';
            exit();
        }
    }
    require __DIR__ .'/../../../templates/booking/booking.php';
}