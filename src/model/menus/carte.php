<?php

require 'src/model/db.php';

$coursesCarte = $pdo->prepare('SELECT * FROM plats_categories');
$coursesCarte->execute();
$carte = $coursesCarte->fetch();