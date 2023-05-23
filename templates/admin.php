<?php $title = "Restaurant Le Quai Antique - Administration"; ?>
<?php $h1 = 'Espace Administration '.$_SESSION['authAdmin']->firstname .' '. $_SESSION['authAdmin']->username .''; ?>
<?php ob_start(); ?>
<
<div class="form-group">
    <a class="nav-item nav-link" href="src/controllers/admin/booking/admin-booking.php">
        <button type="button" class="submit">Les réservations</button>
    </a>
    <a href="src/controllers/admin/courses/admin-courses.php">
        <button type="button" class="submit">Gérer la carte</button>
    </a>
    <a href="src/controllers/admin/menus/admin-menus.php">
        <button type="button" class="submit">Gérer les menus</button>
    </a>
    <a href="src/controllers/admin/schedule/admin-schedule.php">
        <button type="button" class="submit">Gérer les horaires</button>
    </a>
    <a href="src/controllers/admin/users/admin-users.php">
        <button type="button" class="submit">Gérer les clients et administrateurs</button>
    </a>
    <a href="src/controllers/admin/images/admin-images.php">
        <button type="button" class="submit">Gérer les images</button>
    </a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/layout.php'; ?>