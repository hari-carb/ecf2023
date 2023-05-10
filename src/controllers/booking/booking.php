<?php 

function booking()
{
    if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        require __DIR__ .'/log/check-post-errors.php';
        $errors = checkPostErrors();
        //Validation inscription
        if (empty($errors))
        {
            $_SESSION['flash']['success'] = 'Votre réservation a bien été prise en compte';
            header('Location: confirm-resa.php');
        }
    }
    require __DIR__ .'/../../../templates/booking.php';
}


