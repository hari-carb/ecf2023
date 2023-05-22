<?php
require __DIR__ .'/../model/schedule/layout.php';

function displayScheduleOpen()
{
    require __DIR__ .'/../model/schedule/layout.php';
    foreach ($scheduleOpen as $sche)
    {
    print '
        <tr>
            <td>'. $sche->day . ' '. $sche->lunch . ' et de '. $sche->diner . '</td>            </td>
        </tr>';
    }
}