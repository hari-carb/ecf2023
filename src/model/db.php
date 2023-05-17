<?php
try {
    $pdo = new PDO('mysql:dbname=quai_antique;host=localhost', 'isamuesrol', 'QyvT9VfY6jSjyvSLT4E9');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$pdo->exec("set names utf8mb4");