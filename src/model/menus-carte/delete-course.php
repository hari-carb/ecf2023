<?php
require_once __DIR__ .'/../db.php';
$getIdCourse = $_GET['id'];
$courses = $pdo->prepare('SELECT * FROM plats WHERE id = ?');
$courses->execute(array($getIdCourse));
if ($courses->rowCount() > 0)
{
    $deleteCourse = $pdo->prepare('DELETE FROM plats WHERE id = ?');
    $deleteCourse->execute(array($getIdCourse));
}else
{
    $_SESSION['flash']['danger'] = 'Aucun plat n\'a été trouvé';
}