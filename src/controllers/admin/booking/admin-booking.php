<?php

require __DIR__ .'/../../../../templates/admin/booking/admin-booking.php';
require __DIR__ .'/../display-admin.php';
    $today = currentDate();
    $nextWeekDate = dateNextWeek();
    $nextMonthDate = dateNextMonth();
    $nextYearDate = dateNextYear();
    $yesterday = datePastDay();
    $pastWeekDate = datePastWeek();
    $pastMonthDate = datePastMonth();
    $pastYearDate = datePastYear();
    if (!empty($_POST))
    {
        switch ($_POST['selectBooking'])
        {
        case 1: displayAdminBooking($today, $today);
        break;
        case 2: displayAdminBooking($today, $nextWeekDate);
        break;
        case 3: displayAdminBooking($today, $nextMonthDate);
        break;
        case 4: displayAdminBooking($today, $nextYearDate);
        break;
        case 5: displayAdminBooking($pastWeekDate, $yesterday);
        break;
        case 6: displayAdminBooking($pastMonthDate, $yesterday);
        break;
        case 7: displayAdminBooking($pastYearDate, $yesterday);
        break;
        default: "Pas de période sélectionnée";
        
        }
    }else
    {
        displayAdminBooking($today, $nextWeekDate);
    }
