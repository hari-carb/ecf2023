<?php $title = "Restaurant Le Quai Antique - Administration - Réservations"; ?>
<?php $h1 = "Réservations"; ?>
<?php ob_start(); ?>

<div class="row justify-content-center">
    <div class="col-auto">
        <div>
            <h2>Modifier le nombre maximum de places par service</h2>
            <form id="form-nb-max" class="" action="admin-booking.php" method="POST">
                <label class="formLabel" for="nb-max">Nombre maximum</label>
                <input type="number" id="nb-max" class="number"  name="nb-max" placeholder="<?= $nbMax->nbMax; ?>" required />
                <button class="btn-admin btn btn-primary btn-large">Modifier</button>
            </form>
        </div>
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
        <?php displayBooking(); ?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>