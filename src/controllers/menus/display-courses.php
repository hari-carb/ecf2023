<?php

function displayCategories()
{
    require 'src/model/db.php';
    $categories = "SELECT type FROM categories";
    foreach ($pdo->query($categories) as $category)
    {
        $displayCat = print '<option value="'. $category->type .'">'. $category->type .'</option>';
    }
    return $displayCat;
}