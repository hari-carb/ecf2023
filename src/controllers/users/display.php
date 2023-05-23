<?php

function checkEmail()
{
    require __DIR__ .'/../../model/db.php';
    $userEmail = $_SESSION['authUser']->email;
    $selectEmail = "SELECT email FROM users";
    foreach ($pdo->query($selectEmail) as $checkEMail)
    {
        if ($userEmail !== $checkEMail)
        {
            return false;
        }else
        {
            return true;
        }
    }
}
function displayUserBooking($fromDate, $toDate)
{
    if (!checkEmail())
    {
        echo '<div class="row justify-content-center">
        <div class="col-auto">
        <table name="liste-admin-booking" class="table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Service</th>
                <th>Nb pers</th>
            </tr>
        </thead>
        <tbody>';
        require __DIR__ .'/../../model/db.php';
        $userEmail = $_SESSION['authUser']->email;
        $reservations = "SELECT * FROM booking WHERE date >='$fromDate' AND date <='$toDate' AND email = '$userEmail' ORDER BY date ";
        if (($pdo->query($reservations))->rowCount() > 0)
        {
            foreach ($pdo->query($reservations) as $resa)
            {
                $displayResa = print'
                <tr>
                    <td>'. $resa->date.'</td>
                    <td>'. $resa->time.'</td>
                    <td>'. $resa->nbpers.'</td>
                </tr>';
            }
            echo '</tbody></table>';
        }else
        {
            $displayResa = print '

            <tr>
            <td>Pas de réservation pour cette période</td>
        </tr>';
        }
        echo '</tbody></table></div></div>';
    }else
    {
    $displayResa = print '
    <div class="container container-md container-lg center">
        <p>Vous n\'avez pas encore réservé</p>
    </div>';
    }
    return $displayResa;
}
function insertBookingUser()
{
    require __DIR__ .'/../admin/display-admin.php';
    $today = currentDate();
    $nextYearDate = dateNextYear();
    $pastMonthDate = datePastMonth();
    $pastYearDate = datePastYear();
    if (!empty($_POST))
    {
        switch ($_POST['selectBooking'])
        {
        case 1: displayUserBooking($today, $nextYearDate);
        break;
        case 2: displayUserBooking($pastMonthDate, $today);
        break;
        case 3: displayUserBooking($pastYearDate, $today);
        break;
        default: "Pas de période sélectionnée";
      }
    }else
    {
      displayUserBooking($today, $nextYearDate);
    }
}