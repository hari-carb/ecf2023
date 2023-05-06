<?php
require 'src/controllers/users/check-post-errors.php';

function register()
{
    if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        checkPostErrors();
    }
    require 'templates/register.php';
}