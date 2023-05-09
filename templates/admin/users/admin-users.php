<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>


<?php ob_start(); ?>
<h1>Gestion des utilisateurs</h1>

<h2><a href="add-user.php">Ajouter un utilisateur</a></h2>
<h2>Listes des clients et administrateurs</h2>
<table name="liste-admin-users" class="table table-responsive table-sm table-striped table-bordered vertical-align-middle">
    <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
        </tr>
    </thead>
    <tbody>
        <?php displayAdminUsers(); ?>
    </tbody>
 </table>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../../layout-admin.php'; ?>