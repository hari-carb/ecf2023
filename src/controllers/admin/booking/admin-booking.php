<?php

require __DIR__ .'/../display-admin.php';
require __DIR__ .'/../../../model/booking/nb-max.php';

if (!empty($_POST['nb-max']))
{
    require __DIR__ .'/../../../model/booking/update-nb-max.php';
    if ($updateNbMax)
    {
        $updateNbMax = null;
        $_SESSION['flash']['success'] = "Le nombre maximum de convives a bien été modifié";
        header('location: admin-booking.php');
        exit();
    }
}
require __DIR__ .'/../../../../templates/admin/booking/admin-booking.php';