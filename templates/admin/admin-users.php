<?php $title = "Restaurant Le Quai Antique - Administration - Utilisateurs"; ?>


<?php ob_start(); ?>
<?php require __DIR__ .'/nav-admin.php'; ?>
<h1>Gestion des utilisateurs</h1>

<h2><a href="">Ajouter un utilisateur</a></h2>
<h2>Modifier ou supprimer un utilisateur</h2>
<table>
    <thead>
        <tr>
            <th colspan="6">Listes des clients et administrateurs</th>
        </tr>
    </thead>
    <tbody>
        <?php displayAdminUsers();
; ?>
    </tbody>
 </table>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout-admin.php'; ?>