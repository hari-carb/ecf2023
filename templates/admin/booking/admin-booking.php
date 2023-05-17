<?php $title = "Restaurant Le Quai Antique - Administration - Réservations"; ?>

<?php ob_start(); ?>

<h1>Réservations</h1>
<div>
    <form id="form" onChange= "form.submit()" class="form-control" action="admin-booking.php" method="POST">
        <select name="selectBooking" class="form-select" aria-label= "Sélectionner une période">
            <option selected>Sélectionner une période</option>
            <option value="1">Aujourd'hui</option>
            <option value="2">La semaine à venir</option>
            <option value="3">Le mois à venir</option>
            <option value="4">L'année à venir</option>
            <option value="5">La semaine dernière</option>
            <option value="6">Le mois dernier</option>
            <option value="7">L'année dernière</option>
        </select>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>