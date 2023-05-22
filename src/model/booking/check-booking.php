<?php
require __DIR__ .'/../db.php';
$date = $_GET['data1'];
$nbpers = intval($_GET['data2']);
$time = $_GET['data3'];
$nbMax = $pdo->prepare("SELECT nbMax FROM maxBooking");
$nbMax->execute();
$result1 = $nbMax->fetch(PDO::FETCH_ASSOC);
$nbResaMax = implode($result1);

if ($time == '12h00' || $time == '12h15' || $time == '12h30' || $time == '12h45' || $time == '13h00' || $time == '13h15' || $time == '13h30' || $time == '13h45')
{
    $sum = $pdo->prepare("SELECT SUM(nbpers) AS nbPersResa FROM booking_lunch WHERE date='$date'");
    $sum->execute();
    $result = $sum->fetch(PDO::FETCH_ASSOC);
    if (implode($result) == null) {
        $sumResa = 0;
        $nbpersTotal = $nbpers + $sumResa;
        if ($nbResaMax <$nbpersTotal)
        {
            echo '<p>Il n\'y a plus de place à ce service</p>';
        }else
        {
            echo '<p>Ce créneau est disponible</p>';
        }
    }else
    {
        $sumResa = implode($result);
        $nbpersTotal = $nbpers + $sumResa;
        if ($nbResaMax <$nbpersTotal)
        {
            echo '<p>Il n\'y a plus de place à ce service</p>';
        }else
        {
            echo '<p>Ce créneau est disponible</p>';
        }
    }
}elseif ($time == '19h00' || $time == '19h15' || $time == '19h30' || $time == '19h45' || $time == '20h00' || $time == '21h15' || $time == '21h30' || $time == '21h45')
{
    $sum = $pdo->prepare("SELECT SUM(nbpers) AS nbPersResa FROM booking_diner WHERE date='$date'");
    $sum->execute();
    $result = $sum->fetch(PDO::FETCH_ASSOC);
    if (implode($result) == null) {
        $sumResa = 0;
        $nbpersTotal = $nbpers + $sumResa;
        if ($nbResaMax <$nbpersTotal)
        {
            echo '<p>Il n\'y a plus de place à ce service</p>';
        }else
        {
            echo '<p>Ce créneau est disponible</p>';
        }
    }else
    {
        $sumResa = implode($result);
        $nbpersTotal = $nbpers + $sumResa;
        if ($nbResaMax <$nbpersTotal)
        {
            echo '<p>Il n\'y a plus de place à ce service</p>';
        }else
        {
            echo '<p>Ce créneau est disponible</p>';
        }
    }
}else
{
    echo 'No time';
}
