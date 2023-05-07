<?php $title = "Restaurant Le Quai Antique - Administration"; ?>

<?php ob_start(); ?>

<h1>Espace Administration <?= $_SESSION['authAdmin']->firstname;?> <?= $_SESSION['authAdmin']->username;?>!</h1>

<div>
    <h3>Gérer les utilisateurs et administrateurs</h3>
    <a href="src/controllers/admin/users/admin-users.php">Ajouter, modifier ou supprimer</a>

    <h3>Gérer la carte</h3>
    <a href="src/controllers/admin/courses/admin-courses.php">Ajouter, modifier ou supprimer</a>
    
    <h3>Gérer les menus</h3>
    <a href="src/controllers/admin/menus/admin-menus.php">Ajouter, modifier ou supprimer</a>

    <h3>Gérer les réservations</h3>
    <a href="">Ajouter, modifier ou supprimer</a>

</div>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>