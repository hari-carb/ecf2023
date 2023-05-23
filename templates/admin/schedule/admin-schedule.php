
<?php $title = "Restaurant Le Quai Antique - Administration - Horaires"; ?>
<?php $h1 = "Gestion des horaires"; ?>
<?php ob_start(); ?>
<div class="row justify-content-center">
    <div class="col-auto">
        <table name="liste-admin-schedule" class="content table table-responsive table-sm table-striped table-bordered vertical-align-middle">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Déjeuner</th>
                    <th>Dîner</th>
                    <th>Ouvert ou fermé</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php displayAdminSchedule(); ?>
            </tbody>
        </table>
    </div>
</div>
 
</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>