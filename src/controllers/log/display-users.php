<?php

function displayUsers($users)
{
    require_once __DIR__ .'/../../model/db.php';
    foreach ($pdo->query($users) as $user)
    {
        $text = print '<input type="radio" name="update-user" id="update-user" value/>' . $user->username .' '. $user->email;
    }
    return $text;
}