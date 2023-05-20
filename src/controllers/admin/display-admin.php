<?php
if (session_status() == PHP_SESSION_NONE)
{
  session_start();
}
require __DIR__ .'/../../model/db.php';

//users
function displayAdminUsers()
{
    require __DIR__ .'/../../model/db.php';
    $users = 'SELECT * FROM users ORDER BY username';
    foreach ($pdo->query($users) as $user)
    {
        $displayAdminUser = print'
        <tr>
            <td>'. $user->type.'</td>
            <td>'. $user->username.'</td>
            <td>'. $user->firstname.'</td>
            <td class="text-break">'. $user->email.'</td>
            <td>'. $user->tel.'</td>
            <td>'. $user->nbpers.'</td>
            <td>'. $user->allergies.'</td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="update-user.php?id='. $user->id. '">Modifier</a></button></td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="delete-user.php?id='. $user->id. '">Supprimer</a></button></td>
        </tr>';
    }
       return $displayAdminUser;
}
//courses
function adminDisplayCoursesByCategories($type)
{
    require __DIR__ .'/../../model/db.php';
    $courses = "SELECT title, description, price, p_id, c1_id, c1_type FROM plats_by_cat1 WHERE c1_type= '$type'";
    print '<tr><td colspan="6"><h4>'. $type. 's</h4></td></tr>';
    foreach ($pdo->query($courses) as $course)
    {
        $displayCourse = print '<tr>
            <td>'. $course->c1_type. '</td>
            <td>'. $course->title. '</td>
            <td>'. $course->description. '</td>
            <td>' .$course->price. '</td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="update-course.php?id='. $course->p_id. '">Modifier</a></button></td>
            <td><button type="button" class="btn btn-primary btn-sm"><a href="delete-course.php?id=' .$course->p_id. '">Supprimer</a></button></td>
        </tr>';
    }
    return $displayCourse;
}

function checkPostPrice($price)
{
	$number = preg_match('@[0-9]@', $price);
    if (!$number)
    {
        return false;
    }
    return true;
}
//menus
function adminDisplayMenu($menu)
{
    require __DIR__ .'/../../model/db.php';
    $coursesByMenu = "SELECT menu_id, plats_id, title, description, category1_type FROM menu_plats_categories WHERE menu='$menu'";
    print '
    <table name="liste-admin-courses" class="table table-responsive table-sm table-striped table-bordered vertical-align-middle caption-top">
        <tbody>';
    foreach ($pdo->query($coursesByMenu) as $courseByMenu)
    {
        $displayCourse = print
        '<tr>
            <td>'. $courseByMenu->category1_type. '</td>
            <td>'. $courseByMenu->title. '</td>
            <td>'. $courseByMenu->description. '</td>
            <td>
            <button type="button" class="btn btn-primary btn-sm">
                <a href="delete-menu.php?menuId=' .$courseByMenu->menu_id. '&platId=' .$courseByMenu->plats_id. '">Supprimer du menu</a>
            </button>
            </td>
        </tr>';
    }
    print '</tbody></table>';
    return $displayCourse;
}

function displayCourse($idMenu)
{
    require __DIR__ .'/../../model/db.php';
    $menus = "SELECT id, name, price FROM menus WHERE id='$idMenu'";
    $courses = "SELECT * FROM plats_by_cat1";
    print ' <table name="liste-admin-users" class="content table table-primary table-responsive table-striped table-bordered vertical-align-middle">
    <tbody>';
    foreach ($pdo->query($menus) as $menu)
    {
        $displayMenus = print '
        <tr>
            <td class="td-title">MENU ' .$menu->name. '</td>
            <td class="td-title">Prix : ' .$menu->price. '€</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="update-menu.php?id=' .$menu->id. '">Modifier le menu</a>
                </button>
            </td>
        </tr>';
    }
    print '</tbody></table>
    <form id="form'.$idMenu. '" onChange= "form'.$idMenu. '.submit()" class="form-control" action="admin-menus.php" method="POST">
        <input type="hidden" id="menuId" name="menuId" value="'. $idMenu .'">
        <select id="addCourseMenu" name="addCourseMenu">
            <option value="">Ajouter un plat</option>';
            foreach ($pdo->query($courses) as $course)
            {
                $displayCourses = print '<option value="'. $course->p_id .'">'. $course->c1_type .' : ' .$course->title .'</option>';
            }
    print '</select></form>';
    return array($displayMenus,$displayCourses,$idMenu);
}
//booking
function currentDate()
{
    $now = date('Y-m-d');
    return $now;
}
function dateNextWeek()
{
   $week1 = mktime(0, 0, 0, date("m"), date("d")+7, date("Y"));
   $week = date('Y-m-d', $week1);
   return $week;
}
function dateNextMonth()
{
   $month1 = mktime(0, 0, 0, date("m")+1, date("d"), date("Y"));
   $month = date('Y-m-d', $month1);
   return $month;
}
function dateNextYear()
{
   $year1 = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
   $year = date('Y-m-d', $year1);
   return $year;
}
function datePastDay()
{
   $pDay1 = mktime(0, 0, 0, date("m"), date("d")-1, date("Y"));
   $pDay = date('Y-m-d', $pDay1);
   return $pDay;
}
function datePastWeek()
{
   $pWeek1 = mktime(0, 0, 0, date("m"), date("d")-7, date("Y"));
   $pWeek = date('Y-m-d', $pWeek1);
   return $pWeek;
}
function datePastMonth()
{
   $pMonth1 = mktime(0, 0, 0, date("m")-1, date("d"), date("Y"));
   $pMonth = date('Y-m-d', $pMonth1);
   return $pMonth;
}
function datePastYear()
{
   $pYear1 = mktime(0, 0, 0, date("m")-1, date("d"), date("Y"));
   $pYear = date('Y-m-d', $pYear1);
   return $pYear;
}
function displayAdminBooking($fromDate, $toDate)
{
    echo '<div class="container container-md container-lg center">
    <table name="liste-admin-booking" class="table table-responsive table-striped table-bordered vertical-align-middle">
    <thead>
        <tr>
            <th>Date</th>
            <th>Déjeuner</th>
            <th>Diner</th>
            <th>Nb pers</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Allergies</th>
        </tr>
    </thead>
    <tbody>';
    require __DIR__ .'/../../model/db.php';
    $reservations = "SELECT * FROM booking WHERE date >='$fromDate' AND date <='$toDate' ORDER BY date";
    if (($pdo->query($reservations))->rowCount() > 0)
    {
        foreach ($pdo->query($reservations) as $resa)
        {
            $displayResa = print'
            <tr>
                <td>'. $resa->date.'</td>
                <td>'. $resa->lunch.'</td>
                <td>'. $resa->diner.'</td>
                <td>'. $resa->nbpers.'</td>
                <td>'. $resa->name.'</td>
                <td>'. $resa->firstname.'</td>
                <td class="text-break">'. $resa->email.'</td>
                <td>'. $resa->tel.'</td>
                <td>'. $resa->allergies. '</td>
            </tr>';
        }
    }else
        {
            $displayResa = print'
            <tr>
                <td colspan= "8">Aucune réservation pour cette période</td>
            </tr>';
        }
    echo '</tbody></table></div>';
    return $displayResa;
}

function displayImages()
{
    require __DIR__ .'/../../model/db.php';
    $photos = "SELECT * FROM photos ORDER BY id DESC";
    if ($pdo->query($photos)->rowCount() > 0)
    {
        echo '<div class="container text-center">
        <form method="POST" action="">
                <div class="row">';
        foreach ($pdo->query($photos) as $photo)
        {
            echo '
            <div class="col">
            <p>'. $photo->description .'</p>
                <a href="images/'. $photo->name .'">
                    <img src="mini/'. $photo->name .'" alt="Image" />
                </a>
                <div>
                    <label for="add-slider">Ajouter au slider</label>
                    <input type="checkbox" name="add-slider[]" id="add-slider" value="'.$photo->id.'">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-sm"><a href="delete-image.php?id='. $photo->id .'">Supprimer l\'image</a></button>
                </div>
            </div>';
        }
        echo '<div class="col">
            <button type="submit" name="btn_upload" class="submit">Valider</button>
        </div>
        </div></form></div>';
    }else echo 'Aucune image à afficher';
}