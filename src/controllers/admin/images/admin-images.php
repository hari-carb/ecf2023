<?php

require __DIR__ .'/../../../model/db.php';
require __DIR__ .'/../display-admin.php';
require __DIR__ .'/display.php';

if (!empty($_POST))
{
    require __DIR__ .'/../../../model/images/admin-images.php';
    $_SESSION['flash']['success'] = "Les photos ont été mises à jour";
    header('location: ../../../../index.php');
}
require __DIR__ .'/../../../../templates/admin/images/admin-images.php';