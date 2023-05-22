<?php $title = "Restaurant Le Quai Antique - Menu"; ?>
<?php $h1 = "Les menus"; ?>
<?php ob_start(); ?>

<?php require __DIR__ .'/nav-menu.php'; ?>
<?php displayMenuNameAndCourses() ?>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__ .'/../layout.php'; ?>