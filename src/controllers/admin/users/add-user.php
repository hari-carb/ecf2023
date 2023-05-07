<?php

require __DIR__ .'/../../log/check-post-errors.php';
if (!empty($_POST))
    {
        //Vérification et affichage des erreurs de saisie
        checkPostErrors();
    }
require __DIR__ .'/../../../../templates/admin/users/add-user.php';
