<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>
<?php $h1 = "Gestion des utilisateurs"; ?>
<?php ob_start(); ?>
<div class="container container-md container-lg center">
    <button class="btn btn-primary"><a href="add-user.php">Ajouter un utilisateur</a></button>
    <h2>Listes des clients et administrateurs</h2>
</div>
<div class="row justify-content-center">
    <div class="col-auto">
    <table name="liste-admin-users" class="content table table-responsive table-sm table-striped table-bordered vertical-align-middle">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Nb pers</th>
                <th>Allergies</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php displayAdminUsers(); ?>
        </tbody>
    </table>
    </div>
  </div>
 
</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>