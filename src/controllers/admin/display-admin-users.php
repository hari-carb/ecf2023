<?php
function displayAdminUsers()
{
    require __DIR__ .'/../../model/db.php';
    $users = 'SELECT * FROM users ORDER BY username';
    foreach ($pdo->query($users) as $user)
    {
        $displayAdminUser = print'
        <tr>
            <td>'. $user->type.'</td>
            <td>'. $user->username.'</td>
            <td>'. $user->firstname.'</td>
            <td>'. $user->email.'</td>
            <td><button type="submit"><a href="update-user.php?id='. $user->id. '">Modifier</a></button></td>
            <td><button type="submit"><a href="delete-user.php?id='. $user->id. '">Supprimer</a></button></td>
        </tr>';
    }
       return $displayAdminUser;
}