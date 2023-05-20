<?php

require __DIR__ .'/../db.php';

$deleteCarousel = $pdo->prepare("UPDATE photos SET carousel=NULL WHERE carousel='yes'");
$deleteCarousel->execute();
$postSlider= $_POST['add-slider'];
foreach ($postSlider as $index => $val)
{
    $addCarousel = $pdo->prepare("UPDATE photos SET carousel='yes' WHERE id= ?");
    $addCarousel->execute(array($postSlider[$index]));
}