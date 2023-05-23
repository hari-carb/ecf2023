<?php

/*menus-carte.php : affiche nom du menu, image, 
bouton link to la liste de plats du menu sélectionné*/
function displayMenus($menuName)
{
    print '<div class="card-body">';
    print '<h2 class="card-text menu">Menu<br>'. $menuName .'</h2>';
    require __DIR__ .'/../../model/db.php';
    $menus =  $pdo->prepare("SELECT * FROM menus WHERE name='$menuName'");
    $menus->execute();
    $menu = $menus->fetch();
    print '
        <p class="card-text menu">'. $menu->price .' €</p>
        <a href="menu.php?id='. $menu->id .'">
            <button type="submit" class="submit">Consulter</button>
        </a>';
    print '</div>';
}
// dans menu.php : Affiche les plats d'un menu
function displayMenuNameAndCourses()
{
    require __DIR__ .'/../../model/menus-carte/menu.php';
    print '<h2>Menu '. $menuName->menu .'</h2>';
    displayCoursesByMenu($getIdMenu);
}
//dans menu.php
function displayCoursesByMenu($menuId)
{
    require __DIR__ .'/../../model/db.php';
    $courses = "SELECT title, description FROM menu_plats_categories WHERE menu_id='$menuId'";
    foreach ($pdo->query($courses) as $course)
    {
        $displayCourseByMenu = print '<h3>' . $course->title . '</h3>
        <p class="courses">' . $course->description . '</p>';
    }
    return $displayCourseByMenu;
}

//dans carte.php, affiche les plats par categories epfd
function displayCoursesByCat1($type)
{
    require __DIR__ .'/../../model/db.php';
    $coursesCat = "SELECT title, description, price FROM plats_by_cat1 WHERE c1_type = '$type'";
    print '
    <h2>'. $type .'</h2>';
    foreach ($pdo->query($coursesCat) as $course)
    {
        $displayCourseCat = print '<h3>' . $course->title . '</h3>
        <p class="courses">' . $course->description . '</p>
        <p class="courses">' . $course->price . '€</p>';
    }
        return $displayCourseCat;
}
//dans carte.php, affiche les plats par categories div
function displayCoursesByCat2($type)
{
    require __DIR__ .'/../../model/db.php';
    $coursesCat = "SELECT title, description, price FROM plats_by_cat2 WHERE c2_type = '$type'";
    print '
    <h2>'. $type .'</h2>';
    foreach ($pdo->query($coursesCat) as $course)
    {
        $displayCourseCat = print '<h3>' . $course->title . '</h3>
        <p class="courses">' . $course->description . '</p>
        <p class="courses">' . $course->price . '€</p>';
    }
        return $displayCourseCat;
}
//dans carte.php, affiche les categories
function displayCategories()
{
    require __DIR__ .'/../../model/db.php';
    $categories = "SELECT type FROM categories";
    foreach ($pdo->query($categories) as $category)
    {
        $displayCat = print '<option value="'. $category->type .'">'. $category->type .'</option>';
    }
    return $displayCat;
}

// carte.php: Affiche les plats triés par catégories selon la sélection
function displayCourses()
{
// Affiche les plats triés par catégories selon la sélection
    if (!empty($_POST))
    {
        switch ($_POST['selectCat'])
        {
        case 1: displayCoursesByCat1('Entrée');
        break;
        case 2: displayCoursesByCat1('Plat');
        break;
        case 3: displayCoursesByCat1('Fromage');
        break;
        case 4: displayCoursesByCat1('Dessert');
        break;
        case 5: displayCoursesByCat2('Végétarien');
        break;
        case 6: displayCoursesByCat2('Poisson');
        break;
        case 7: displayCoursesByCat2('Viande');
        break;
        case 8: displayCoursesByCat2('Fruits de mer');
        break;
        }
    }else
    {
        // Affiche les plats de la catégorie 1
        displayCoursesByCat1('Entrée');
        displayCoursesByCat1('Plat');
        displayCoursesByCat1('Fromage');
        displayCoursesByCat1('Dessert');
    }
}