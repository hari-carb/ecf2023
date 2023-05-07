<?php

require __DIR__ .'/../db.php';

$coursesCarte = $pdo->prepare('SELECT * FROM plats_categories');
$coursesCarte->execute();
$carte = $coursesCarte->fetch();