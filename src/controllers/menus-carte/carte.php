<?php

function carte()
{    
    require __DIR__ .'/../../../templates/menus-carte/carte.php';
    require __DIR__ .'/display.php';

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
        displayCoursesByCat1('Entrée');
        displayCoursesByCat1('Plat');
        displayCoursesByCat1('Fromage');
        displayCoursesByCat1('Dessert');
    }
}