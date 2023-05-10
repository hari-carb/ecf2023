<?php

$deleteUser = $pdo->prepare('DELETE FROM users WHERE id = ?');
$deleteUser->execute(array($getIdUser));