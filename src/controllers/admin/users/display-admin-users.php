<?php
function displayAdminUsers()
{
    require __DIR__ .'/../../../model/db.php';
    $users = 'SELECT * FROM users ORDER BY username';
    foreach ($pdo->query($users) as $user)
    {
        $displayAdminUser = print'
        <tr>
            <td>'. $user->type.'</td>
            <td>'. $user->username.'</td>
            <td>'. $user->firstname.'</td>
            <td class="text-break">'. $user->email.'</td>
            <td>'. $user->tel.'</td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="update-user.php?id='. $user->id. '">Modifier</a></button></td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="delete-user.php?id='. $user->id. '">Supprimer</a></button></td>
        </tr>';
    }
       return $displayAdminUser;
}