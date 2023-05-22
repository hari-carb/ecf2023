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
            // si la requête a fonctionné
            if ($insertResa)
            {
                $insertResa = null;
                $_SESSION['flash']['success'] = "Merci pour votre réservation !";
                header('location: index.php');
                exit();
            }else {
                $_SESSION['flash']['danger'] = 'Un problème s\'est produit. La réservation n\'a pas été validée';
                header('Location: booking.php');
                exit();
            }
        }
    }
    require __DIR__ .'/../../../templates/booking/booking.php';
}