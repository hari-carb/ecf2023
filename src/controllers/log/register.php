<?php
require __DIR__ .'/../log/check-post-errors.php';

function register()
{
    if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        checkPostErrors();
    }
    require __DIR__ .'/../../../templates/log/register.php';
}