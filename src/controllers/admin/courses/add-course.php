<?php
require __DIR__ .'/display-courses.php';

if (!empty($_POST))
{
  require_once __DIR__ .'/display-courses.php';
  $errors = array();
  if (!checkPostPrice($_POST['price']))
  {
    $errors['price'] = "Vous devez saisir un nombre entier";
  }

  if (empty($errors))
  {
  //Insère les posts
    require_once __DIR__ .'/../../../model/menus-carte/add-course.php';
    $_SESSION['flash']['success'] = "Votre plat a bien été ajouté.";
    header('Location: admin-courses.php');
  }else
  {
      $_SESSION['flash']['danger'] = 'Le plat n\'a pas été ajouté';
  }
}
require __DIR__ .'/../../../../templates/admin/courses/add-course.php';
